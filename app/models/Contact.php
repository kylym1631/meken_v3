<?php
class Contact
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getContacts()
    {
        $this->db->query("SELECT * FROM links where city in('moscow','bishkek','osh')");
        $resultsContacts = $this->db->resultSet();
        return $resultsContacts;
    }

    public function getStaff()
    {
        $this->db->query("SELECT * FROM staff where active = 1");
        $resultStaff = $this->db->resultSet();
        return $resultStaff;
    }

}