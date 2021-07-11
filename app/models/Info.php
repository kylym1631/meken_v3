<?php

class Info
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getAvia()
    {
        $this->db->query("SELECT * FROM avia_companies");
        $resultsAvia = $this->db->resultSet();
        return $resultsAvia;
    }
    public function getNumberAvia()
    {
        $this->db->query("SELECT DISTINCT title FROM avia_companies");
        $resultsNumberAvia = $this->db->resultSet();
        return $resultsNumberAvia;
    }
    public function getAirports()
    {
        $this->db->query("SELECT * FROM airports_all INNER JOIN airports ON airports_all.iata=airports.iata");
        $resultsAirports = $this->db->resultSet();
        return $resultsAirports;
    }

//    public function getNumberAirports()
//    {
//        $this->db->query("SELECT DISTINCT title_russian FROM airports_all INNER JOIN airports ON airports_all.iata=airports.iata");
//        $resultsNumberAirports = $this->db->resultSet();
//        return $resultsNumberAirports;
//    }

    public function getNumberAirports()
    {
        $this->db->query("SELECT DISTINCT title_russian FROM airports_all INNER JOIN airports ON airports_all.iata=airports.iata");
        $resultsNumberAirports = $this->db->resultSet();
        return $resultsNumberAirports;
    }

    public function getEmbassies()
    {
        $this->db->query("SELECT * FROM embassies");
        $resultsEmbassies = $this->db->resultSet();
        return $resultsEmbassies;
    }

    public function getNumberEmbassies()
    {
        $this->db->query("SELECT DISTINCT title_russian FROM embassies");
        $resultsNumberEmbassies = $this->db->resultSet();
        return $resultsNumberEmbassies;
    }

}