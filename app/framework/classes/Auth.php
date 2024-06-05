<?php

namespace app\framework\classes;

class Auth 
{
    public static function check(string $type)
    {
        switch ($type) {
            case 'auth':
                if (!isset($_SESSION['logged'])) {
                    return redirect('/authentication/login');
                }
                break;
            
            default:
                break;
        }
    }
}