<?php
class Contacts extends Controller
{
    public function __construct(){

        $this->contactModel = $this->model('Contact');
    }

    public function index(){
        $mergedLink = array_merge(MAIN_LINKS, SECONDARY_LINKS);
        $contacts = $this->contactModel->getContacts();
        $staff = $this->contactModel->getStaff();
        $reviewImg = checkerImg('img/reviews');
        $reviewVideos = checkerVideo('videos/reviews');
        $data = [
            'link'=>$mergedLink,
            'contacts'=>$contacts,
            'staff'=>$staff,
            'review_img'=>$reviewImg,
            'review_video'=>$reviewVideos,
        ];

        $this->view('contacts/index', $data);
    }

}