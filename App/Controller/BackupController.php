<?php

namespace App\Controller;

class BackupController extends Controller
{
    public static function export()
    {
        exec(BASEDIR . '/App/Backup/export.bat');
        echo BASEDIR . '/App/Backup/export.bat';
        //header('Location: /home');
    }
    public static function import()
    {
        exec(BASEDIR . '/App/Backup/import.bat');  
        header('Location: /home');      
    }
}
