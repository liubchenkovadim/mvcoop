<?php
/**
 * Created by PhpStorm.
 * User: vad
 * Date: 24.08.18
 * Time: 20:43
 */

class View
{

        public function render($name)
        {
            require 'views/' . $name . '.php';
        }
}