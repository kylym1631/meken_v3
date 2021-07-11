<?php
class Infos extends Controller
{
    public function __construct(){

        $this->infoModel = $this->model('Info');
    }

    public function index()
    {
        $resultsAvia = $this->infoModel->getAvia();
        $resultsNumberAvia = $this->infoModel->getNumberAvia();
        $resultsAirports = $this->infoModel->getAirports();
        $resultsNumberAirports = $this->infoModel->getNumberAirports();
        $resultsEmbassies = $this->infoModel->getEmbassies();
        $resultsNumberEmbassies = $this->infoModel->getNumberEmbassies();
        $data = [
        'avia'=>$resultsAvia,
        'number_avia'=>$resultsNumberAvia,
        'airports'=>$resultsAirports,
        'number_airports'=>$resultsNumberAirports,
        'embassies'=>$resultsEmbassies,
        'number_embassies'=>$resultsNumberEmbassies,
        ];

        $this->view('infos/index', $data);
    }

}