<?php 

namespace app\framework\classes;

class Macros
{
    public function upper(string $value) {
        return strtoupper($value);
    }

    public function lower(string $value) {
        return strtolower($value);
    }
}