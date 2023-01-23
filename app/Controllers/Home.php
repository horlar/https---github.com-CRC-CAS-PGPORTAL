<?php

namespace App\Controllers;
// namespace App\Controllers\tps;
use App\Models\Users;

class Home extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Create User Profile';
        return view('pages/tps/formComponents', $data);
    }

    public function login()
    {
        $data['pageTitle'] = 'Account Management';
        return view('pages/tps/login', $data );
    }

    public function privacy()
    {
        $data['pageTitle'] = 'Privacy Policy';
        return view('pages/tps/privacyPolicy', $data );
    }
}
