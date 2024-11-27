<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
    public function setting()
    {
        return view('/admin1/settings');
    }
    public function demnade()
    {
        return view('/admin1/invoice');
    }
    public function ways()
    {
        return view('/admin1/trajet');
    }
    public function users()
    {
        return view('/admin1/form-elements');
    }
    public function conducteur()
    {
        return view('/admin1/icons');
    }
}
