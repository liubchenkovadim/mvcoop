<?php
/**
 * Created by PhpStorm.
 * User: vad
 * Date: 24.08.18
 * Time: 20:43
 */

class View
{

        public function render($name,$argument = false)
        {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/sidebar.php';
            require 'views/footer.php';
        }
}