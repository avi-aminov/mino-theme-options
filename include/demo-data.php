<?php

// CLIENR SIDE
if(class_exists('MinoOptionsBuilder')){

    // Remix Icon v2.5.0
    // https://remixicon.com

    $minoOB->set_group([
        'id' => 'azd_brand',
        'name' => 'Brand',
        'icon' => 'ri-archive-drawer-line'
    ]);

    $minoOB->set_group([
        'id' => 'azd_general',
        'name' => 'General',
        'icon' => 'ri-contrast-drop-fill'
    ]);

    $minoOB->set_group([
        'id' => 'azd_header',
        'name' => 'Header',
        'icon' => 'ri-dvd-fill',
    ]);

    $minoOB->set_group([
        'id' => 'azd_backup',
        'name' => 'Backup',
    ]);

    $minoOB->set_group([
        'id' => 'azd_extra_fields',
        'name' => 'Extra',
        'icon' => 'ri-dvd-fill',
    ]);

    $minoOB->set_fields_to_group('azd_brand',[
        [
            'type' => 'title',
            'title' => 'Site Logo',
            'description' => 'Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Illum, amet distinctio nulla sit, placeat aspernatur modi dolores ex nihil, accusamus dignissimos earum! Facere dolorem est architecto rerum culpa cumque ut.'
        ],
        [
            'type' => 'media',
            'id' => 'azd_default_logo',
            'label' => 'Default Logo',
            'description' => 'Upload your default logo here. If you not upload, then site title will load in this logo location.',
            'placeholder' => 'Upload your default logo'
        ],
        [
            'type' => 'media',
            'id' => 'azd_white_logo',
            'label' => 'White Logo',
            'name' => 'Add Logo',
            'description' => 'Upload your white logo here. If you not upload, then site title will load in this logo location.'
        ],
        [
            'type' => 'number',
            'label' => 'Logo Top Space',
            'id' => 'azd_logo_top_space',
            'description' => 'Upload your white logo here. If you not upload, then site title will load in this logo location.'
        ],
        [
            'type' => 'number',
            'label' => 'Logo Bottom Space',
            'id' => 'azd_logo_bottom_space',
            'em' => 'xp'
        ],
        [
            'type' => 'title',
            'title' => 'WordPress Admin Logo',
            'description' => 'Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Illum, amet distinctio nulla sit, placeat aspernatur modi dolores ex nihil, accusamus dignissimos earum! Facere dolorem est architecto rerum culpa cumque ut.'
        ],
        [
            'type' => 'media',
            'id' => 'azd_login_logo',
            'label' => 'Login Logo',
            'name' => 'Add Login Logo',
            'description' => 'Upload your WordPress login page logo here.'
        ],
        [
            'type' => 'size_group',
            'label' => 'Logo Padding',
            'id' => 'azd_logo_padding',
            'description' => 'output example: 10px 10px 10px 10px'
        ],
        [
            'type' => 'color',
            'label' => 'Header Color',
            'id' => 'azd_color_demo',
            'description' => 'Choose your color'
        ],
    ]);

    $minoOB->set_fields_to_group('azd_general',[
        [
            'id' => 'zad_is_rtl',
            'type' => 'switch',
            'label' => 'RTL',
            'description' => 'Turn on If your site is RTL direction',
            'size' => 'size-xl'
        ],
        [
            'id' => 'zad_disabled_preloder',
            'type' => 'switch',
            'label' => 'Preloder',
            'description' => 'Turn off if you don\'t want your site to be Preloder.'
        ],
        [
            'id' => 'zad_show_classic_widgets',
            'type' => 'switch',
            'label' => 'Classic Widgets Editor',
            'description' => 'Show Classic Widgets Editor.',
            'size' => 'size-s'
        ],
        [
            'type' => 'select_box',
            'label' => 'Full Width & Extra Width',
            'id' => 'zad_layout_select_box',
            'description' => "Boxed or Fullwidth? Choose your site layout width. Default : Full Width",
            'options' => [
                [
                    'key' => 'box_width',
                    'value' => 'box width',
                    'img' => 'http://azedw.local/wp-content/themes/azedw/includes/theme-options/framework-extend/images/boxed-width.jpg'
                ],
                [
                    'key' => 'full_width',
                    'value' => 'full width',
                    'img' => 'http://azedw.local/wp-content/themes/azedw/includes/theme-options/framework-extend/images/full-width.jpg'
                ]
            ]
        ],
        [
            'type' => 'textarea',
            'label' => 'Popup Desctription',
            'id' => 'zad_default_textarea',
            'description' => 'Helpful shortcodes: [contact-form-7 id="5" title="Contact form 1"] or any shortcode.'
        ],
    ]);

    $minoOB->set_fields_to_group('azd_header',[
        [
            'type' => 'select_box',
            'label' => 'Select Header',
            'id' => 'zad_select_header',
            'description' => "Boxed or Fullwidth? Choose your site layout width. Default : Full Width",
            "scaling" => 'vertical',
            'options' => [
                [
                    'key' => 'hedaer_1',
                    'value' => 'Header 1',
                    'img' => 'http://azedw.local/wp-content/themes/azedw/includes/theme-options/framework-extend/images/header-5.png'
                ],
                [
                    'key' => 'hedaer_2',
                    'value' => 'Header 1',
                    'img' => 'http://azedw.local/wp-content/themes/azedw/includes/theme-options/framework-extend/images/header-2.png'
                ],
                [
                    'key' => 'hedaer_3',
                    'value' => 'Header 3',
                    'img' => 'http://azedw.local/wp-content/themes/azedw/includes/theme-options/framework-extend/images/header-1.png'
                ],
                [
                    'key' => 'hedaer_4',
                    'value' => 'Header 4',
                    'img' => 'http://azedw.local/wp-content/themes/azedw/includes/theme-options/framework-extend/images/header-4.png'
                ],
                [
                    'key' => 'hedaer_5',
                    'value' => 'Header 5',
                    'img' => 'http://azedw.local/wp-content/themes/azedw/includes/theme-options/framework-extend/images/header-6.png'
                ]
            ]
        ],
        [
            'type' => 'drop_down_box',
            'label' => 'Droop Down Box',
            'id' => 'zad_dd_demo',
            'description' => "Boxed or Fullwidth? Choose your site layout width. Default : Full Width",
            'options' => [
                [
                    'key' => 'ddb_1',
                    'value' => 'ddb 1',
                ],
                [
                    'key' => 'ddb_2',
                    'value' => 'ddb 2',
                ],
                [
                    'key' => 'ddb_3',
                    'value' => 'ddb 3',
                ]
            ]
        ],
        [
            'type' => 'code',
            'label' => 'Custom JS',
            'id' => 'zad_js_code',
            'description' => 'Custom JS <HEAD> PAGE SECTION INJECTION'
        ],
        [
            'type' => 'font',
            'id' => 'zad_custom_fonts',
            'label' => 'Custom Google Font',
        ]
    ]);

    $minoOB->set_fields_to_group('azd_backup',[
        [
            'type' => 'title',
            'title' => 'You can save your current options. Download a Backup and Import.',
            'description' => 'Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Illum, amet distinctio nulla sit, placeat aspernatur modi dolores ex nihil, accusamus dignissimos earum! Facere dolorem est architecto rerum culpa cumque ut.'
        ],
        [
            'type' => 'backup',
            'label' => 'Popup Desctription',
            'id' => 'zad_backup_textarea',
            'description' => '( copy-paste your backup string here )'
        ],
    ]);


    $minoOB->set_fields_to_group('azd_extra_fields',[
        [
            'type' => 'title',
            'title' => 'Extra fileds',
            'description' => 'Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Illum, amet distinctio nulla sit, placeat aspernatur modi dolores ex nihil, accusamus dignissimos earum! Facere dolorem est architecto rerum culpa cumque ut.'
        ],
        [
            'type' => 'text',
            'label' => 'Popup Desctription',
            'id' => 'zad_text_input',
            'description' => 'test',
            'isNumber' => false
        ],
        [
            'type' => 'date',
            'label' => 'Popup Desctription',
            'id' => 'zad_date_input',
            'description' => 'test'
        ],
        [
            'type' => 'time',
            'label' => 'Popup Desctription',
            'id' => 'zad_time_input_4',
            'description' => 'test'
        ],
        [
            'type' => 'checkbox',
            'label' => 'Popup Desctription',
            'id' => 'zad_checkbox_input_2',
            'description' => 'test',
            'options' => [
                [
                    'key' => 'checkbox_1',
                    'value' => 'checkbox 1',
                    ],
                [
                    'key' => 'checkbox_2',
                    'value' => 'checkbox 2',
                ]
            ]
        ],
        [
            'type' => 'radio',
            'label' => 'Popup Desctription',
            'id' => 'zad_radio_input',
            'description' => 'test',
            'options' => [
                [
                    'key' => 'radio_1',
                    'value' => 'radio 1',
                    ],
                [
                    'key' => 'radio 2',
                    'value' => 'radio 2',
                ]
            ]
        ],
    ]);
    
    
    //$minoThemeOptionsBuilder->init($themeOptions);
    $minoOB->init();
}



//echo "AAA___AAA___AAA___AAA";

//MinoOptions::get();