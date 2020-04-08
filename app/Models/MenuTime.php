<?php

/**
 * Menu Model
 *
 * @package    GoferEats
 * @subpackage Model
 * @category   Menu
 * @author     Quickshopper Product Team
 * @version    1.0
 * @link       https://www.quickshopper.co.uk
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class MenuTime extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'menu_time';

    public $timestamps = false;

    
}
