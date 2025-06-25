<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/principal');
     
    }


     public function nosotros()
    {
       return view('front/nosotros');
    }

     public function registro()
    {
        echo view('front/register');
        
    }

     public function login()
    {
        echo view('front/loger');
       
    }
}
