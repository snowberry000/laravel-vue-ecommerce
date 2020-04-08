<?php

/**
 * Help Translations Model
 *
 * @package     Makent
 * @subpackage  Model
 * @category    Help Translations
 * @author      Quickshopper Product Team
 * @version     1.5.6
 * @link        https://www.quickshopper.co.uk
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HelpTranslations extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'description'];
    
    public function language() {
    	return $this->belongsTo('App\Models\Language','locale','value');
    }
}
