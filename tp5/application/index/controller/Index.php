<?php
namespace app\Index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index/index');
    }
    public function pcenter()
    {
        return $this->fetch('pcenter/zhuye');
    }
    public function login()
    {
        return $this->fetch('login/login');
    }

    public function song_details()
    {
        return $this->fetch('song_details/song_details');
    }



}
