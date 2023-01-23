<?php

namespace App\Controllers\tps;
// namespace App\Controllers\tps;
use App\Models\Users;

class Setup extends BaseController
{
    /**
     * [The View for creation user  Account]
     *
     * @return  [type]  [return description]
     */

     /**Academic Session Page Definition */
    public function academicSessions()
    {
        $data['pageTitle'] = 'Setup Academic Session';
        return view('pages/tps/academicSessions', $data);
    }

    /**Schools Page Definition */
    public function schools()
    {
        $data['pageTitle'] = 'Setup Schools';
        return view('pages/tps/schools', $data);
    }

    /**Departments Page Definition */
    public function departments()
    {
        $data['pageTitle'] = 'Setup Departments';
        return view('pages/tps/departments', $data);
    }

    /**Options Page Definition */
    public function options()
    {
        $data['pageTitle'] = 'Setup Options';
        return view('pages/tps/options', $data);
    }

    public function courseDefinition()
    {
        $data['pageTitle'] = 'Setup CourseDefinition';
        return view('pages/tps/courseDefinition', $data);
    }

    public function searchResults()
    {
        $data['pageTitle'] = 'Create User Profile';
        return view('pages/tps/searchResults', $data);
    }
}
