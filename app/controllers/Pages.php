<?php
  class Pages extends Controller {
    public function __construct(){

        $this->pageModel = $this->model('Page');
    }
    public function index(){
        $mergedLink = array_merge(MAIN_LINKS, SECONDARY_LINKS);
        $slider = $this->pageModel->getSlider();
        $sliderComplex = $this->pageModel->getSliderComplex();
        $linkWhiteLabel = $this->pageModel->getWhiteLabel();
        $popular = $this->pageModel->getPopular();
        $reasons = $this->pageModel->getReasons();
        $city = $this->pageModel->getCity();
        $date = date('Y-m-d');
        $day15 = date('dm', strtotime($date. ' + 15 days'));
        $day25 = date('dm', strtotime($date. ' + 25 days'));
        $data = [
            'link' =>$mergedLink,
            'slider'=>$slider,
            'slider_complex'=>$sliderComplex,
            'white_label' => $linkWhiteLabel,
            'day15'=>$day15,
            'day25'=>$day25,
            'popular'=>$popular,
            'reasons'=>$reasons,
            'city'=>$city,

          ];

      $this->view('pages/index', $data);
    }

    public function about(){

        $data = [

      ];

      $this->view('pages/about', $data);
    }
  }
