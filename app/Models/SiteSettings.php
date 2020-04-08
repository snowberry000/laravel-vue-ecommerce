<?php

/**
 * Site Setting Model
 *
 * @package     GoferEats
 * @subpackage  Model
 * @category    Site Setting
 * @author      Quickshopper Product Team
 * @version     1.0
 * @link        https://www.quickshopper.co.uk
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'site_setting';

	public $timestamps = false;
}
