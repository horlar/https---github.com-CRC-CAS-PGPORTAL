<?php

namespace App\Controllers\tps;
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
        $data['pageTitle'] = 'Create User Account';
        return view('pages/tps/createUser', $data);
    }

    public function editUser()
    {
        $data['pageTitle'] = 'Edit User Accounts';
        return view('pages/tps/editUser', $data);
    }
    
    public function assignPriviledges()
    {
        $data['pageTitle'] = 'Assign Priviledges to Users';
        return view('pages/tps/assignPriviledges', $data);
    }

    public function changePassword()
    {
        $data['pageTitle'] = 'Change Users Password';
        return view('pages/tps/changePassword', $data);
    }
}