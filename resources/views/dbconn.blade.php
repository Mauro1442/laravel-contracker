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
                        echo "Database is connected. Database Name is : " . DB::connection()->getDatabaseName();
                        
                        echo  ' Language is: '. app()->getLocale();

                
                    }
                ?>
        </div>
    </body>
</html>
