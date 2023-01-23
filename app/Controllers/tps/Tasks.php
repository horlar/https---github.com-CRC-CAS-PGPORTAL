<?php

namespace App\Controllers\tps;
use App\Models\Users;

class Tasks extends BaseController
{
    /**
     * [The View for creation Issuance View]
     *
     * @return  [type]  [return description]
     */

     /**Academic Session Page Definition */
    
    public function scoreEntry()
    {
        $data['pageTitle'] = 'Enter Student Results';
        return view('pages/tps/scoreEntry', $data);
    }

    public function logResults()
    {
        $data['pageTitle'] = 'Log Student Results';
        return view('pages/tps/logResults', $data);
    }
}