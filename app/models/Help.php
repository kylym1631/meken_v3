<?php
class Help
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getFaq()
    {
        $this->db->query('SELECT * FROM helps_faq');
        $resultsFaq = $this->db->resultSet();
        return $resultsFaq;
    }

    public function getHelps()
    {
        $this->db->query('SELECT * FROM helps INNER JOIN helps_type ON helps.type_russian=helps_type.type_russian');
        $resultsHelps = $this->db->resultSet();
        return $resultsHelps;
    }
    public function getNumberHelpsTypes()
    {
        $this->db->query("SELECT * FROM helps_type");
        $resultsNumberHelpsTypes = $this->db->resultSet();
        return $resultsNumberHelpsTypes;
    }

    public function getNumberHelpsSections()
    {
        $this->db->query("SELECT * FROM helps_section");
        $resultsNumberHelpsSections = $this->db->resultSet();
        return $resultsNumberHelpsSections;
    }

    public function getSection($section){
        $this->db->query('SELECT * FROM helps INNER JOIN helps_section ON helps.section=helps_section.section  WHERE helps.section = :section');
        $this->db->bind(':section', $section);

        $row = $this->db->single();

        return $row;
    }

}