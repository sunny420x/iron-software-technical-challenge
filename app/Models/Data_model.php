<?php
namespace App\Models;

use CodeIgniter\Model;

class Data_model extends Model
{
    protected $table = 'homepage_data';

    public function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        $file_path = APPPATH . 'json/homepage.json';
        if (file_exists($file_path)) {
            $json_data = file_get_contents($file_path);
            return json_decode($json_data, true);
        }

        return false;
    }
}