<?php
/**
 * Created by PhpStorm.
 * User: kilenga
 * Date: 7/18/17
 * Time: 8:34 PM
 */
Class Init extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->load->view('index');
    }
    public function olevel_page(){
        $this->load->view('student/header');
        $this->load->view('student/O_level');
    }
    public function alevel_page(){
        $this->load->view('student/header');
        $this->load->view('student/A_level');
    }
    public function olevel_topics(){
        $this->load->view('student/header');
        $this->load->view('student/O_level_topics');
    }
    public function alevel_topics(){
        $this->load->view('student/header');
        $this->load->view('student/A_level_topics');
    }
    public function start_topic(){
        $this->load->view('student/header');
        $this->load->view('student/topics_view');
    }
    public function olevel_pp(){
        $this->load->view('student/header');
        $this->load->view('student/O_level_past_papers');
    }
    public function alevel_pp(){
        $this->load->view('student/header');
        $this->load->view('student/A_level_past_papers');
    }
    public function login(){
        $this->load->view('student/header');
        $this->load->view('login_view');
    }

}