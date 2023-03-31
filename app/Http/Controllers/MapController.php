<?php

namespace App\Http\Controllers;
use App\Models\MapModel;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function __construct()
    {
        $this->MapModel = new MapModel();
    }
    public function index()
    {
        return view('welcome');
    }
    public function info()
    {
        return view('info');
    }
    public function json(){
        $results = $this->MapModel->allData();
        return json_encode($results);
    }
}
