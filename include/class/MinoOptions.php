<?php


class MinoOptions
{
    public static $options;

    public static function get($id) {
        //self::options = $this->get_options_arr();
        return get_option( MINO_THEME_OPTIONS_PREFIX.$id) ?? null;
    }
}