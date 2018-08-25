<?php
/**
 * Created by PhpStorm.
 * User: vad
 * Date: 25.08.18
 * Time: 16:20
 */

class DateBase extends PDO
{
    public function __construct()
    {
        parent::__construct('mysql:host=mvcoop.localhost;dbname=mvc','root','root',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

}