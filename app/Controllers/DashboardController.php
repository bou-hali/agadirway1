<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard'); // Load the admin dashboard view
    }
}
