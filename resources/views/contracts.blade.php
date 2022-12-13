
<?php
    if (DB::connection()->getPDO()) {
        
        json_encode(DB::select('call prc_contract_status_v2("c06fe33316d38b7e2ffe01f16e30b000")')) ;
    }
?>
