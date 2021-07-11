<?php
class Orders extends Controller
{
    public function __construct(){

        $this->orderModel = $this->model('Order');
    }
    public function index()
    {
        $aviaLogo = checkerImg('img/aviacompanies');
        $data = [
        'avia_logo'=>$aviaLogo,
        ];

        $this->view('orders/index', $data);
    }

}