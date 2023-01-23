<?php

namespace App\Controllers;
use App\Models\Users;

class UserManagement extends BaseController
{
    /**
     * [The View for creation Issuance View]
     *
     * @return  [type]  [return description]
     */

     /**Academic Session Page Definition */
    
    public function createUser()
    {
        $data['pageTitle'] = 'Search for Student Results';
        return view('pages/tps/createUser', $data);
    }

    public function editUser()
    {
        $data['pageTitle'] = 'Log Student Results';
        return view('pages/tps/editUser', $data);
    }
    
    public function assignPriviledges()
    {
        $data['pageTitle'] = 'Log Student Results';
        return view('pages/tps/assignPriviledges', $data);
    }
}