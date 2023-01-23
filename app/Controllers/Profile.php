<?php

namespace App\Controllers;
use App\Models\Users;

class Profile extends BaseController
{
    /**
     * [The View for creation user  Account]
     *
     * @return  [type]  [return description]
     */
    public function create()
    {
        $data['pageTitle'] = 'Create User Profile';
        return view('pages/tas/createProfile', $data);
    }

    public function search()
    {
        $data['pageTitle'] = 'Create User Profile';
        return view('pages/tas/search');
    }
}
