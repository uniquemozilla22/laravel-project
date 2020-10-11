<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name 
       protected $table ='posts';
    //Id for the produc tto search on
       public $primarykey ='id';
    //
       public $timestamp =true;
    }

?>
