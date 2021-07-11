<?php
class Shops extends  Controller
{
    public function __construct(){

        $this->shopModel = $this->model('Shop');
    }

    public function index()
    {
        $resultsSlider = $this->shopModel->getSlider();
        $mergedLink = array_merge(MAIN_LINKS, SECONDARY_LINKS);
        $services = $this->shopModel->getServices();
        $goods = $this->shopModel->getGoods();
        $data = [
        'link'=>$mergedLink,
        'results_slider'=>$resultsSlider,
        'services'=>$services,
        'goods'=>$goods,
        ];
        $this->view('shop/index', $data);
    }
}