<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'1915101008',
            'nama'=>'Ni Luh Putu Risma Dewi'
        );
        $data['user']='';
        return view('admin.beranda',compact('title','data'));
    }

    public function dashboard(){
        $title="Data Dashboard";
        
        return view('admin.dashboard',compact('title'));
    } 
}

