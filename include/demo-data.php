<?php

// CLIENT SIDE
if(class_exists('MinoOptionsBuilder')){

    // Remix Icon v2.5.0
    // https://remixicon.com

    $minoThemeOptions->set_group([
        'id' => 'azedw-brand-group-id',
        'name' => 'Brand',
        'icon' => 'ri-brush-fill'
    ]);

    $minoThemeOptions->set_group([
        'id' => 'azedw-general-id',
        'name' => 'General',
        'icon' => 'ri-global-fill'
    ]);

    $minoThemeOptions->set_group([
        'id' => 'azedw-popup-image-id',
        'name' => 'Popup Image',
        'icon' => 'ri-chat-settings-line'
    ]);

    $minoThemeOptions->set_group([
        'id' => 'azedw-header-id',
        'name' => 'Header',
        'icon' => 'ri-window-2-line'
    ]);

    $minoThemeOptions->set_group([
        'id' => 'azedw-title-bar-id',
        'name' => 'Title Bar',
        'icon' => 'ri-text'
    ]);

    $minoThemeOptions->set_group([
        'id' => 'azedw-footer-id',
        'name' => 'Footer',
        'icon' => 'ri-window-fill'
    ]);

    $minoThemeOptions->set_fields_to_group('azedw-brand-group-id',[
        [
            'type' => 'title',
            'title' => 'Site Logo'
        ],
        [
            'type' => 'media',
            'id' => 'azedw-default-logo-id',
            'label' => 'Default Logo',
            'description' => 'Upload your default logo here. If you not upload, then site title will load in this logo location.',
            'content' => 'Default Theme Logo'
        ],
        [
            'type' => 'media',
            'id' => 'azedw-white-logo-id',
            'label' => 'White Logo',
            'description' => 'Upload your white logo here. If you not upload, then site title will load in this logo location.'
        ],
        [
            'type' => 'number',
            'id' => 'azedw-logo-top-space-id',
            'label' => 'Logo Top Space',
            'description' => 'Top padding'
        ],
        [
            'type' => 'number',
            'id' => 'azedw-logo-bottom-space-id',
            'label' => 'Logo Bottom Space',
            'description' => 'Bottom padding'
        ],
        [
            'type' => 'title',
            'title' => 'WordPress Admin Logo'
        ],
        [
            'type' => 'media',
            'id' => 'azedw-login-logo-id',
            'label' => 'Login logo',
            'description' => 'Upload your WordPress login page logo here.'
        ]
    ]);

    $minoThemeOptions->set_fields_to_group('azedw-general-id',[
        [
            'id' => 'azedw-is-rtl-id',
            'type' => 'switch',
            'label' => 'RTL',
            'description' => 'Enable RTL Direction',
            'content' => 'Turn on If your site is RTL direction'
        ],
        [
            'id' => 'azedw-preloder-id',
            'type' => 'switch',
            'label' => 'Preloder',
            'content' => 'Turn off if you don\'t want your site to be Preloder.'
        ],
        [
            'id' => 'azedw-classic-widgets-id',
            'type' => 'switch',
            'label' => 'Classic Widgets Editor',
            'content' => 'Show Classic Widgets Editor'
        ],
        [
            'type' => 'select_box',
            'label' => 'Full Width & Extra Width',
            'id' => 'azedw-site-width-id',
            'description' => "Boxed or Fullwidth? Choose your site layout width. Default : Full Width",
            'options' => [
                [
                    'key' => 'boxed_width',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/boxed-width.jpg'
                ],
                [
                    'key' => 'full_width',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/full-width.jpg'
                ]
            ]
        ],
        [
            'id' => 'azedw-hide-comments-id',
            'type' => 'switch',
            'label' => 'Hide Page Comments?',
            'content' => 'Yes! Hide Page Comments.'
        ],
        [
            'id' => 'azedw-show-cookie-id',
            'type' => 'switch',
            'label' => 'Show Cookie Alert',
            'content' => 'Yes! Show Cookie Alert.'
        ]
    ]);

    $minoThemeOptions->set_fields_to_group('azedw-popup-image-id',[
        [
            'id' => 'azedw-hide-popup-id',
            'type' => 'switch',
            'label' => 'Hide Popup?',
            'content' => 'Yes! Hide Popup.'
        ],
        [
            'type' => 'media',
            'id' => 'azedw-popup-image-id',
            'label' => 'Popup Image',
        ],
        [
            'type' => 'text',
            'label' => 'Popup Title',
            'id' => 'azedw-popup-title-id',
            'description' => 'Set Title for popup message'
        ],
        [
            'type' => 'textarea',
            'label' => 'Popup Description',
            'id' => 'azedw-popup-desc-id',
            'description' => 'Popup Description',
            'size' => 'full'
        ],
        [
            'type' => 'text',
            'label' => 'Popup Notice',
            'id' => 'azedw-popup-notice-id',
            'description' => 'Set text for popup notice'
        ],
        [
            'type' => 'text',
            'label' => 'Popup Contact form 7',
            'id' => 'azedw-popup-cf-id',
            'content' => 'shortCodes for example: [contact-form-7 id="5" title="Contact form 1"]',
            'size' => 'full'
        ],
    ]);

    $minoThemeOptions->set_fields_to_group('azedw-header-id',[
        [
            'type' => 'title',
            'title' => 'Header design'
        ],
        [
            'type' => 'select_box',
            'label' => 'Select Header',
            'id' => 'azedw-select_header-id',
            'description' => "Boxed or Fullwidth? Choose your site layout width. Default : Full Width",
            "scaling" => 'vertical',
            'options' => [
                [
                    'key' => 'hedaer_1',
                    'value' => 'Header 1',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/header-5.png'
                ],
                [
                    'key' => 'hedaer_2',
                    'value' => 'Header 1',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/header-2.png'
                ],
                [
                    'key' => 'hedaer_3',
                    'value' => 'Header 3',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/header-1.png'
                ],
                [
                    'key' => 'hedaer_4',
                    'value' => 'Header 4',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/header-4.png'
                ],
                [
                    'key' => 'hedaer_5',
                    'value' => 'Header 5',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/header-6.png'
                ]
            ]
        ],
        [
            'type' => 'title',
            'title' => "Extra's"
        ],
        [
            'id' => 'azedw-desktop-header-sticky-id',
            'type' => 'switch',
            'label' => 'Desktop Header Sticky',
            'content' => 'Make Fixed Header on Scroll For Desktop'
        ],
        [
            'id' => 'azedw-mobile-header-sticky-id',
            'type' => 'switch',
            'label' => 'Mobile Header Sticky',
            'content' => 'Make Fixed Header on Scroll Fro Mobile (from resolution 992px)'
        ],
        [
            'id' => 'azedw-header-cart-id',
            'type' => 'switch',
            'label' => 'Header Cart',
            'content' => 'Turn On if you want to Show Header Cart .'
        ],
        [
            'id' => 'azedw-header-search-id',
            'type' => 'switch',
            'label' => 'Header Search',
            'content' => 'Turn On if you want to Show Header Search .'
        ],
        [
            'id' => 'azedw-header-account-id',
            'type' => 'switch',
            'label' => 'Header Account',
            'content' => 'Turn On if you want to Show Header Account .'
        ],
        [
            'id' => 'azedw-header-wishlist-id',
            'type' => 'switch',
            'label' => 'Header wishlist',
            'content' => 'Turn On if you want to Show Header wishlist .'
        ],
        [
            'id' => 'azedw-header-slide-menu-id',
            'type' => 'switch',
            'label' => 'Header Slide Menu',
            'content' => 'Turn On if you want to Show Header Slide Menu .'
        ],
        [
            'id' => 'azedw-header-slide-menu-text-id',
            'type' => 'textarea',
            'label' => 'Slide Menu Text',
            'content' => 'Helpful HTML tag and Attribute: p, div, ul, li, a, title, href, class',
            'size' => 'full'
        ],
        [
            'type' => 'title',
            'title' => "Top Bar"
        ],
        [
            'id' => 'azedw-hide-top-bar-id',
            'type' => 'switch',
            'label' => 'Hide Top Bar',
        ],
        [
            'id' => 'azedw-topbar-block-id',
            'type' => 'textarea',
            'label' => 'Topbar Block',
            'content' => 'Top bar block.',
            'size' => 'full',
            'description' => 'Depend by > Hide Top Bar switch',
        ]
    ]);

    $minoThemeOptions->set_fields_to_group('azedw-title-bar-id',[
        [
            'type' => 'title',
            'title' => "Title Area"
        ],
        [
            'id' => 'azedw-title-bar-id',
            'type' => 'switch',
            'label' => 'Title Bar ?',
        ],
        [
            'type' => 'drop_down_box',
            'label' => 'Padding Spaces Top & Bottom',
            'id' => 'drop-padding-spaces-id',
            'content' => 'It has survived not only five centuries, but also the leap into electronic typesetting.',
            'options' => [
                [
                    'key' => 'default_spacing',
                    'value' => 'Default Spacing',
                ],
                [
                    'key' => 'custom_padding',
                    'value' => 'Custom Padding',
                ]
            ]
        ],
        [
            'type' => 'number',
            'id' => 'azedw-title-top-space-id',
            'label' => 'Padding Top',
            'description' => 'Depend Custom Padding Spaces Top & Bottom'
        ],
        [
            'type' => 'number',
            'id' => 'azedw-title-bottom-space-id',
            'label' => 'Padding Bottom',
            'description' => 'Depend Custom Padding Spaces Top & Bottom'
        ],
        [
            'type' => 'title',
            'title' => "Background Options"
        ],
        [
            'type' => 'color',
            'id' => 'azedw-overlay-color-id',
            'label' => 'Overlay Color',
            'description' => 'Choose Overlay color',
        ],
        [
            'type' => 'title',
            'title' => "Breadcrumbs"
        ],
        [
            'id' => 'azedw-hide-breadcrumbs-id',
            'type' => 'switch',
            'label' => 'Hide Breadcrumbs',
            'content' => 'If you want to hide breadcrumbs in your banner, please turn this ON.',
        ],
    ]);


    $minoThemeOptions->set_fields_to_group('azedw-footer-id',[
        [
            'type' => 'title',
            'title' => "Footer Widget Block"
        ],
        [
            'id' => 'azedw-enable-widget-block-id',
            'type' => 'switch',
            'label' => 'Enable Widget Block',
            'content' => 'If you turn this ON, then Goto : Appearance > Widgets. There you can see Footer Widget 1,2,3 or 4 Widget Area, add your widgets there.',
        ],
        [
            'type' => 'select_box',
            'label' => 'Widget Layouts',
            'id' => 'azedw-widget-layouts-id',
            'description' => "Choose your footer widget theme-layouts.",
            "scaling" => 'grid-3',
            'options' => [
                [
                    'key' => 'widget_1',
                    'value' => 'widget 1',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/footer/footer-1.png'
                ],
                [
                    'key' => 'widget_2',
                    'value' => 'widget 2',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/footer/footer-2.png'
                ],
                [
                    'key' => 'widget_3',
                    'value' => 'widget 3',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/footer/footer-3.png'
                ],
                [
                    'key' => 'widget_4',
                    'value' => 'widget 4',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/footer/footer-4.png'
                ],
                [
                    'key' => 'widget_5',
                    'value' => 'widget 5',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/footer/footer-5.png'
                ],
                [
                    'key' => 'widget_6',
                    'value' => 'widget 6',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/footer/footer-6.png'
                ],
                [
                    'key' => 'widget_7',
                    'value' => 'widget 7',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/footer/footer-7.png'
                ],
                [
                    'key' => 'widget_8',
                    'value' => 'widget 8',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/footer/footer-8.png'
                ],
                [
                    'key' => 'widget_9',
                    'value' => 'widget 9',
                    'img' => 'https://demo.minotheme.com/azi/wp/wp-content/themes/azedw/includes/theme-options/framework-extend/images/footer/footer-9.png'
                ],
            ]
        ],
    ]);

    $minoThemeOptions->init();
}