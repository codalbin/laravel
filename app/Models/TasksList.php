<?php 

namespace App\Models;

use Illuminate\Support\Arr ;

class TasksList {
    public static function all() {
        return [
            [
                'taskName' => 'Go shopping'
            ],
            [
                'taskName' => 'Go to the dentist'
            ],
            [
                'taskName' => 'Buy a new broom'
            ],
            [
                'taskName' => 'Washing up'
            ]
        ] ;
    }
}