<?php 
namespace App\Http\Controllers;

use Illuminate\Http\request;

class SiswaController extends Controller
{
    public function index(){
        echo "halaman index siswa";
    }

    public function siswa(){
        return "halaman siswa";
    }
    public function kontak(){
        return "halaman kontak siswa";
    }
}


?>