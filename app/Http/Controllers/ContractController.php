<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContractController extends Controller {

    protected $request;
        /**
     * Call procedure.
     *
     * @param  str  $token
     * @return \Illuminate\Http\Response
     */
    public function search($token)
    {

        $contract = DB::select('call prc_contract_status_v3(?)',[$token]);

        return $contract[0]->{'result'};

    }
}