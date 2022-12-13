<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                <?php
                    if (DB::connection()->getPDO()) {
                        echo "Database is connected. Locale is : " . app()->getLocale();
                        $result = DB::connection()->statement("exec prc_contract_status_v2  c06fe33316d38b7e2ffe01f16e30b000");
                        echo $result;
                    }
                ?>
        </div>
    </body>
</html>
