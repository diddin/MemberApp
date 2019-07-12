<?php

use app\config\singleton\Database;

require '../../vendor/autoload.php';

try {

    Database::get()->connect();
    echo 'A connection to the mysql database server has been established succesfully';

} catch (\Exception $e) {

    echo $e->getMessage();

}
