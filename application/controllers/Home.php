<?php

namespace Application\Controllers;

class Home extends Controller
{
    public function index()
    {
        $productName = "PHONE";
        $this->view('app.index', compact('productName'));
    }

    public function create()
    {
        $this->redirect('Home');
    }
}