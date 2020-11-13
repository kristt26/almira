<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Testing extends Controller
{
    public function index()
    {
        $data['title'] = "Testing WEB";
        return view('testing', $data);
    }
}
