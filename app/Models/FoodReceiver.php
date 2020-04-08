<?php

/**
 * FoodReceiver Model
 *
 * @package    GoferEats
 * @subpackage Model
 * @category   FoodReceiver
 * @author     Quickshopper Product Team
 * @version    1.0
 * @link       https://www.quickshopper.co.uk
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodReceiver extends Model {

	public $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $table = 'food_receiver';


}
