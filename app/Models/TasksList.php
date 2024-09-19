<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model ; 
use Illuminate\Support\Arr ;

class TasksList extends Model {

    protected $table = 'tasks' ; // Use the table we want (default : posts)
    protected $primaryKey = 'id' ; // Define the primary key (default : id)

    protected $fillable = ['id', 'taskName'] ; // Fields to protect so we can add data with tinker

    // public static function all() {
    //     return [
    //         [
    //             'taskName' => 'Go shopping'
    //         ],
    //         [
    //             'taskName' => 'Go to the dentist'
    //         ],
    //         [
    //             'taskName' => 'Buy a new broom'
    //         ],
    //         [
    //             'taskName' => 'Washing up'
    //         ]
    //     ] ;
    // }
}