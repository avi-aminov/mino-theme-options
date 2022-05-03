<?php

class MinoGoogleFonts {
    public static $popularGoogleFontList = [
        [
            'key' =>  'none',
            'name' => 'Select a font',
            'link' => '',
            'use' =>  "Select a font",
        ],
        [
            'key' =>  'roboto',
            'name' => 'Roboto',
            'link' => 'family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500',
            'use' =>  "font-family: 'Roboto', sans-serif;",
        ],
        [
            'key' => 'open_sans',
            'name' => 'Open Sans',
            'link' => 'family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
            'use' =>  "font-family: 'Open Sans', sans-serif;",
        ],
        [
            'key' => 'lato',
            'name' => 'Lato',
            'link' => 'family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
            'use' =>  "font-family: 'Lato', sans-serif;",
        ],
        [
            'key' => 'montserrat',
            'name' => 'Montserrat',
            'link' => 'family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
            'use' =>  "font-family: 'Montserrat', sans-serif;",
        ],
        [
            'key' => 'oswald',
            'name' => 'Oswald',
            'link' => 'family=Oswald:wght@200;300;400;500;600;700',
            'use' =>  "font-family: 'Oswald', sans-serif;",
        ],
        [
            'key' => 'source_sans_pro',
            'name' => 'Source Sans Pro',
            'link' => 'family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
            'use' =>  "font-family: 'Source Sans Pro', sans-serif;",
        ],
        [
            'key' => 'slabo13',
            'name' => 'Slabo 13px',
            'link' => 'family=Slabo+13px',
            'use' =>  "font-family: 'Slabo 13px', serif;",
        ],
        [
            'key' => 'slabo27',
            'name' => 'Slabo 27px',
            'link' => 'family=Slabo+27px',
            'use' =>  "font-family: 'Slabo 27px', serif;",
        ],
        [
            'key' => 'raleway',
            'name' => 'Raleway',
            'link' => 'family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
            'use' =>  "font-family: 'Raleway', sans-serif;",
        ],
        [
            'key' => 'pt_sans',
            'name' => 'PT Sans',
            'link' => 'family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700',
            'use' =>  "font-family: 'PT Sans', sans-serif;",
        ]
    ];
    
    public static function get_google_fonts_list() {
        return self::$popularGoogleFontList;
    }

    public static function get_google_fonts_link($key) {
        foreach (self::$popularGoogleFontList as $font) {
            if($font['key'] == $key){
                return $font['link'];
            }
        }
        return '';
    }
}