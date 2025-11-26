<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\MasterController;


class LandingController extends MasterController
{
    public function index()
    {
        // $func = function () {
        //     $breadcrumbs = ['Home'];
        //     $pageTitle = 'Dashboard';
        //     $this->data = compact('breadcrumbs', 'pageTitle');
        // };

        //return $this->callFunction($func, view('landing.index'));
        return view('welcome');
    }
}
