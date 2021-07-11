<?php
class  Page{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getSlider()
    {
        $this->db->query('SELECT * FROM slider_index where simple = 1');
        $results = $this->db->resultSet();
        return $results;
    }
    public function getSliderComplex()
    {
        $this->db->query('SELECT * FROM slider_index where simple = 0');
        $resultsComplex = $this->db->resultSet();
        return $resultsComplex;
    }
    public function getWhiteLabel()
    {
        $this->db->query("SELECT white_label FROM links where city = 'moscow'");
        $resultWhiteLabel = $this->db->single();
        return $resultWhiteLabel;
    }
    public function getPopular()
    {
        $this->db->query('SELECT * FROM popular');
        $resultsPopular = $this->db->resultSet();
        return $resultsPopular;
    }
    public function getReasons()
    {
        $this->db->query('SELECT * FROM reason');
        $resultsReasons = $this->db->resultSet();
        return $resultsReasons;
    }
    public function getCity()
    {
        $this->db->query("SELECT * FROM links where city = 'moscow'");
        $resultsCity = $this->db->resultSet();
        return $resultsCity;
    }




}