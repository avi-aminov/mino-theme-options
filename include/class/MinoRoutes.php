<?php

/**
 * routes class
 */
class MinoRoutes{
    /**
     * Hold the class instance.
     */
    private static $instance = null;

    public $options = [];
    private $data = [];
    private $helper = [];


    /**
     * @param $options
     * @param $data
     * @param $helper
     * @return MinoRoutes
     */
    public static function getInstance(): MinoRoutes {
        if (self::$instance == null) {
            self::$instance = new MinoRoutes();
        }
        return self::$instance;
    }

    public function __construct(){
        add_action( 'rest_api_init', [ $this, 'create_rest_routes' ] );
    }

    public function setParams($options, $data, $helper){
        $this->options = $options;
        $this->data = $data;
        $this->helper = $helper;
    }

    public function create_rest_routes() {

        /**
         * get options fields
         */
        register_rest_route( 'mino-theme-options/v1', '/options', [
            'methods' => 'GET',
            'callback' => [ $this, 'get_options_fields' ],
            'permission_callback' => [ $this, 'get_settings_permission' ]
        ] );


        /**
         * get options data
         */
        register_rest_route( 'mino-theme-options/v1', '/data', [
            'methods' => 'GET',
            'callback' => [ $this, 'get_options_data' ],
            'permission_callback' => [ $this, 'get_settings_permission' ]
        ] );


        /**
         * get Helper data
         */
        register_rest_route( 'mino-theme-options/v1', '/helper_data', [
            'methods' => 'GET',
            'callback' => [ $this, 'get_helper_data' ],
            'permission_callback' => [ $this, 'get_settings_permission' ]
        ] );


        register_rest_route( 'mino-theme-options/v1', '/options', [
            'methods' => 'POST',
            'callback' => [ $this, 'save_settings' ],
            'permission_callback' => [ $this, 'save_settings_permission' ]
        ] );

        register_rest_route( 'mino-theme-options/v1', '/backup', [
            'methods' => 'POST',
            'callback' => [ $this, 'set_import_options_data' ],
            'permission_callback' => [ $this, 'save_settings_permission' ]
        ] );
    }

    public function get_options_arr() {
        $temp = [];
        foreach ($this->options as $option) {
            array_push($temp, $option);
        }
        return $temp;
    }

    public function set_import_options_data($req) {
        if( isset($req['importData']) && !empty($req['importData']) ){
            $data = $req['importData'];
            $data_decode = base64_decode($data);
            $json = json_decode($data_decode, false);

            foreach ($json as $k => $v) {
                update_option(MINO_THEME_OPTIONS_PREFIX.$k, sanitize_text_field($v)); 
            }

            return rest_ensure_response( 'success' );
        }
        return rest_ensure_response( 'failed' );
    }

    public function get_export_options_data(){
        $page_options = $this->get_options_arr();
        if ($page_options > 0) {
            foreach ($page_options as $option) {
                if (isset($option['fields']) && count($option['fields']) > 0) {
                    $fields = $option['fields'];
                    foreach ($fields as $value) {
                        if( isset($value['type']) 
                            && $value['type'] !== 'title' 
                            && $value['type'] !== 'backup')
                        {  
                            if(get_option(MINO_THEME_OPTIONS_PREFIX.$value['id'])){
                                $temp_data[$value['id']] = get_option( MINO_THEME_OPTIONS_PREFIX.$value['id'] );
                            }else{
                                $temp_data[$value['id']] = '';
                            }
                        }
                    }
                }
            }
        }
        return rest_ensure_response(base64_encode(json_encode($temp_data)));
    }

    public function get_options_fields() {

        $response = new WP_REST_Response();
        $response->set_data($this->options);
        $response = rest_ensure_response($response);
        return $response;
    }


    public function get_options_data() {
        return rest_ensure_response( $this->data );
    }


    public function get_helper_data() {
        return rest_ensure_response( $this->helper );
    }


    // save options by POST 
    public function save_settings( $req ) {
        $page_options = $this->get_options_arr();
        if ($page_options > 0 && isset($req['state']) && count($req['state']) > 0 ) {
            foreach ($page_options as $option) {
                if (isset($option['fields']) && count($option['fields']) > 0) {
                    $fields = $option['fields'];
                    foreach ($fields as $value) {
                        if(isset($value['type']) && $value['type'] !== 'title'){   
                            
                            if(isset($value['type']) && $value['type'] == 'size_group'){                         
                                update_option(MINO_THEME_OPTIONS_PREFIX.$value['id']."_top", sanitize_text_field($req['state'][$value['id']."_top"]));
                                update_option(MINO_THEME_OPTIONS_PREFIX.$value['id']."_right", sanitize_text_field($req['state'][$value['id']."_right"]));
                                update_option(MINO_THEME_OPTIONS_PREFIX.$value['id']."_down", sanitize_text_field($req['state'][$value['id']."_down"]));
                                update_option(MINO_THEME_OPTIONS_PREFIX.$value['id']."_left", sanitize_text_field($req['state'][$value['id']."_left"]));
                            }

                            update_option(MINO_THEME_OPTIONS_PREFIX.$value['id'], sanitize_text_field($req['state'][$value['id']]));                                  
                        }
                    }
                }
            }
        }
        return rest_ensure_response( 'success' );
    }

    public function get_settings_permission() {
        return true;
    }

    public function save_settings_permission() {
        return current_user_can( 'publish_posts' );
    }
}