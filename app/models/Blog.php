<?php


class Blog
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getSlider()
    {
        $this->db->query("SELECT * FROM news_stories_slider");
        $resultsSlider = $this->db->resultSet();
        return $resultsSlider;
    }
    public function getBlogs()
    {
        $this->db->query("SELECT * FROM news_blogs");
        $resultsBlog = $this->db->resultSet();
        return $resultsBlog;
    }
    public function getSales()
    {
        $this->db->query("SELECT * FROM news_sales");
        $resultsSales = $this->db->resultSet();
        return $resultsSales;
    }
    public function getBonus()
    {
        $this->db->query("SELECT * FROM news_bonus");
        $resultsBonus = $this->db->resultSet();
        return $resultsBonus;
    }

}