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

    /**
     * @return MinoRoutes|null
     * The object is created from within the class itself
     * only if the class has no instance.
     */
    public static function getInstance($options): MinoRoutes {
        if (self::$instance == null) {
            self::$instance = new MinoRoutes($options);
        }
        return self::$instance;
    }

    public function __construct($options){
        $this->options = $options;
        add_action( 'rest_api_init', [ $this, 'create_rest_routes' ] );
    }

    public function create_rest_routes() {
        register_rest_route( 'mino-theme-options/v1', '/options', [
            'methods' => 'GET',
            'callback' => [ $this, 'get_options' ],
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

    // get options by GET
    public function get_options_with_data(){
        $page_options = $this->get_options_arr();
        if ($page_options > 0) {
            foreach ($page_options as $option) {
                if (isset($option['fields']) && count($option['fields']) > 0) {
                    $fields = $option['fields'];
                    foreach ($fields as $value) {
                        if(isset($value['type']) && $value['type'] !== 'title'){
                            if(isset($value['type']) && $value['type'] == 'size_group'){                        
                                $temp_data[$value['id']."_top"] = get_option( MINO_THEME_OPTIONS_PREFIX.$value['id']."_top" );
                                $temp_data[$value['id']."_right"] = get_option( MINO_THEME_OPTIONS_PREFIX.$value['id']."_right" );
                                $temp_data[$value['id']."_down"] = get_option( MINO_THEME_OPTIONS_PREFIX.$value['id']."_down" );
                                $temp_data[$value['id']."_left"] = get_option( MINO_THEME_OPTIONS_PREFIX.$value['id']."_left" );
                            }else{
                                if(get_option(MINO_THEME_OPTIONS_PREFIX.$value['id'])){
                                    $temp_data[$value['id']] = get_option( MINO_THEME_OPTIONS_PREFIX.$value['id'] );
                                }else{
                                    $temp_data[$value['id']] = '';
                                }
    
                                if($value['type'] == 'backup'){
                                    $temp_data[$value['id']] = $this->get_export_options_data();
                                }
    
                                if($value['type'] == 'font'){
                                    $temp_data[$value['id']] = get_option( MINO_THEME_OPTIONS_PREFIX.$value['id'] );
                                    $font_opotions['fonts'] = MinoGoogleFonts::get_google_fonts_list();
                                }
                            }
                        }
                    }
                }
            }
        }

        return [
            'options'   => $page_options,
            'data'      => $temp_data,
            'helper'    => $font_opotions
        ];
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
        return base64_encode(json_encode($temp_data));
    }

    public function get_options() {
        return rest_ensure_response( $this->get_options_with_data() );
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