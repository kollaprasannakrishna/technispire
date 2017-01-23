<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('pages.welcome');
    }
    public function getContact(){
        return view('pages.contact');
    }
    public function geta2aIntegration(){
        return view('services.a2aintegration');
    }
    public function getb2bIntegration(){
        return view('services.b2bintegration');
    }
    public function getediIntegration(){
        return view('services.ediintegration');
    }
    public function getapiIntegration(){
        return view('services.apiIntegration');
    }
    public function getAboutUs(){
        return view('pages.about');
    }
    public function getClients(){
        return view('pages.client');
    }
}
