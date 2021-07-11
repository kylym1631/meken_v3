<?php


class Blogs extends Controller
{

    public function __construct(){

        $this->blogModel = $this->model('Blog');
    }

    public function index(){
        $resultsSlider = $this->blogModel->getSlider();
        $resultsBlog = $this->blogModel->getBlogs();
        $resultsSales = $this->blogModel->getSales();
        $resultsBonus = $this->blogModel->getBonus();

        $data = [
        'slider'=>$resultsSlider,
        'blogs'=>$resultsBlog,
        'sales'=>$resultsSales,
        'bonus'=>$resultsBonus,
        ];

        $this->view('blogs/index', $data);
    }

}