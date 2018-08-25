<?php


class articleModel extends Model
{
    public function __construct()
    {
        $this->db =new DateBase();
    }


    public function articleModel ()
    {
    $sql = 'SELECT * FROM articles';
    $query = $this->db->query($sql);

    $this->answer = array();
    $this->answer = $query->fetchAll();
    }
}