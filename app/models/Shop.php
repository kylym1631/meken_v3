<?php
class Shop
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getSlider()
    {
        $this->db->query('SELECT * FROM slider_shop');
        $resultsSlider = $this->db->resultSet();
        return $resultsSlider;
    }

    public function getServices()
    {
        $this->db->query('SELECT * FROM services');
        $resultsServices = $this->db->resultSet();
        return $resultsServices;
    }
    public function getGoods()
    {
        $this->db->query('SELECT * FROM goods');
        $resultsGoods = $this->db->resultSet();
        return $resultsGoods;
    }


}