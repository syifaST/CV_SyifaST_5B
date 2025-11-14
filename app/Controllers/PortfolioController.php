<?php

namespace App\Controllers;

class PortfolioController extends BaseController
{
    // Halaman utama
    public function index()
    {
        return view('portfolio');
    }

    // Halaman detail portofolio
    public function details()
    {
        return view('portfolio-details');
    }

    // Halaman detail service
    public function service()
    {
        return view('service-details');
    }

    // Halaman starter-page (opsional)
    public function starter()
    {
        return view('starter-page');
    }
}