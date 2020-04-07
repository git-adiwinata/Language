<?php

if (!function_exists('language')) {
    /**
     * Get the language instance.
     *
     * @return \Akunting\Language\Language
     */
    function language()
    {
        return app('language');
    }
}
