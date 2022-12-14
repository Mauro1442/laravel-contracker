<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use DB;
use Request;
use Config;

class ContractController extends Controller {

        /**
     * Call procedure.
     *
     * @param  str  $token
     * @return \Illuminate\Http\Response
     */

    public function search()
    {
        $lang = Request::server('HTTP_ACCEPT_LANGUAGE');

        $parsedUrl = parse_url($_SERVER['REQUEST_URI']);

        $token= str_replace("token=", "",$parsedUrl['query']);

        $contract = DB::select('call prc_contract_status_v3(?)',[$token]);

        return response()->json([$contract[0]->{'result'}][0]); 
    }
}