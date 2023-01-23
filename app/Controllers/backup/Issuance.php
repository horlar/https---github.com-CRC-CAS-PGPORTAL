<?php

namespace App\Controllers;
use App\Models\Users;

class Issuance extends BaseController
{
    /**
     * [The View for creation Issuance View]
     *
     * @return  [type]  [return description]
     */

     /**Academic Session Page Definition */
    
    public function searchResults()
    {
        $data['pageTitle'] = 'Search for Student Results';
        return view('pages/tps/searchResults', $data);
    }

    public function logResults()
    {
        $data['pageTitle'] = 'Log Student Results';
        return view('pages/tps/logResults', $data);
    }
}
