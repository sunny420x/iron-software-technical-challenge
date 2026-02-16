<?php
namespace App\Controllers;
use App\Models\Data_model;

class Home extends BaseController
{
    public function index(): string
    {
        $data_model = new Data_model();
        $data['homepage_data'] = $data_model->getData();
        return view('homepage', $data);
    }
}