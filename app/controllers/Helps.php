<?php
class Helps extends Controller
{
    public function __construct(){

        $this->helpModel = $this->model('Help');
    }

    public function index()
    {
        $resultsFaq = $this->helpModel->getFaq();
        $resultsHelps = $this->helpModel->getHelps();
        $resultsNumberHelpsTypes = $this->helpModel->getNumberHelpsTypes();
        $resultsNumberHelpsSections = $this->helpModel->getNumberHelpsSections();
        $data = [
        'faq'=>$resultsFaq,
        'helps'=>$resultsHelps,
        'number_helps_types'=>$resultsNumberHelpsTypes,
        'number_helps_sections'=>$resultsNumberHelpsSections,
        ];
        $this->view('helps/index', $data);
    }

    public function show($link){
        $section = $this->helpModel->getSection($link);
        $resultsHelps = $this->helpModel->getHelps();
        $data = [
            'section' => $section,
            'helps'=>$resultsHelps,
        ];
        $this->view('helps/show', $data);
    }
}