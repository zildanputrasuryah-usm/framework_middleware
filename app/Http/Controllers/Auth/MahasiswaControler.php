<?php
namespace App\Http\Controller;

use Illuminate\Http\Request;

class MahasiswaController
{
    function index (Request $req){
        echo 'token salah tidak bisa login';
    }
    function create(Request $req){
        return view ('createMahasiswa');
    }
}
?>