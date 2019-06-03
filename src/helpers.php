<?php

if (!function_exists('form')) {
    /**
     * @return \BlackIT\SemanticForm\SemanticForm
     */
    function form()
    {
        return app('semantic-form');
    }
}
