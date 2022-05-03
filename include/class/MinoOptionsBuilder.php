<?php

class MinoOptionsBuilder{

    /**
     * Hold the class instance.
     */
    private static $instance = null;

    private $options = [];

    // google font default value
    public $googleFont = [
        'status' => false,
        'id' => '',
        'data' => '-1',
    ];

    /**
     * @return MinoOptionsBuilder|null
     * The object is created from within the class itself
     * only if the class has no instance.
     */
    public static function getInstance(): MinoOptionsBuilder {
        if (self::$instance == null) {
            self::$instance = new MinoOptionsBuilder();
        }
        return self::$instance;
    }

    public function __construct(){

        // add scripts only on this plugin page
        if($this->isThisPage()){
            add_action( 'admin_enqueue_scripts', [ $this, 'mino_include_scripts' ]);
        }
        
        add_action( 'admin_menu', [ $this, 'mino_admin_menu' ]);
    }

    // initialization options
    //public function init($options) {
    public function init() {
        $minoRoutes = MinoRoutes::getInstance($this->options);
        $this->getFontType($this->options);

        if($this->googleFont['status'] && $this->googleFont['data']){
            add_action( 'wp_enqueue_scripts', [ $this, 'google_fonts' ] );
        }
    }

    public function set_group($args){
        $this->options[$args['id']] = $args;
    }

    public function set_fields_to_group($group_id, $args){
        $this->options[$group_id]['fields'] = $args;
    }

    private function getFontType(array $arr) {
        if ($arr > 0) {
            foreach ($arr as $option) {
                if (isset($option['fields']) && count($option['fields']) > 0) {
                    $fields = $option['fields'];
                    foreach ($fields as $value) {
                        if(isset($value['type']) && $value['type'] == 'font'){
                            if(get_option( MINO_THEME_OPTIONS_PREFIX.$value['id'] ) !== 'none'){
                                $this->googleFont['status'] = true;
                                $this->googleFont['id'] = $value['id'];
                                $this->googleFont['data'] = get_option( MINO_THEME_OPTIONS_PREFIX.$value['id'] );
                            }
                        }
                    }
                }
            }
        }
    }

    // add item to admin nav
    public function mino_admin_menu() {
        add_menu_page(
            'Mino Theme Options',
            'Theme Options',
            'manage_options',
            'mino-theme-options_admin-page.php',
            [ $this, 'mino_admin_page' ],
            'dashicons-tickets',
            2
        );
    }

    // Theme options React App Space
    public function mino_admin_page(){
        ?>
        <div class="container-fluid">
            <div id="mino-theme-options-app"></div>
        </div>
        <?php
    }

    // check if page of mino theme options
    private function isThisPage () {
       return isset($_GET["page"]) && $_GET["page"] == 'mino-theme-options_admin-page.php';
    }

    /**
     * include assets
     */
    public function mino_include_scripts() {

        // JS
        wp_enqueue_script('mino-bootstrap-bundle', MINO_THEME_OPTIONS_URL . '/assets/js/bootstrap.bundle.min.js', ['jquery'], '3.3.7', true );
        wp_enqueue_script('mino-theme-options', MINO_THEME_OPTIONS_URL . 'build/index.js', ['jquery', 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor'], rand(), true);

        // CSS
        wp_enqueue_style('mino-bootstrap-css', MINO_THEME_OPTIONS_URL . '/assets/css/bootstrap.min.css', [], '4.6.3', 'all' );
        wp_enqueue_style('mino-themify-icons-css', MINO_THEME_OPTIONS_URL . '/assets/css/themify-icons.css', [], '4.6.3', 'all' );
        wp_enqueue_style('mino-remixicon-css', MINO_THEME_OPTIONS_URL . '/assets/css/remixicon.css', [], '4.6.3', 'all' );
        wp_enqueue_style('mino-theme-options-style', MINO_THEME_OPTIONS_URL . 'build/index.css');

        // Localizer
        wp_localize_script('mino-theme-options', 'appLocalizer', [ 'apiUrl' => home_url('/wp-json'), 'nonce' => wp_create_nonce( 'wp_rest' )]);
    }

    function google_fonts() {
        $font_type = MinoGoogleFonts::get_google_fonts_link($this->googleFont['data']);
        wp_enqueue_style( 'mino-options-google-fonts', 'https://fonts.googleapis.com/css2?'.$font_type.'&display=swap', false );
    }
}