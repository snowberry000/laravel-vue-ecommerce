<?php

/**
 * HelpSubCategoryLang Us Model
 *
 * @package     Makent
 * @subpackage  Model
 * @category    HelpSubCategoryLang Us
 * @author      Quickshopper Product Team
 * @version     1.5.3
 * @link        https://www.quickshopper.co.uk
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class HelpSubCategoryLang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'help_sub_category_lang';

    protected $fillable = ['name', 'description'];

    public $timestamps = false;

    public function language() {
        return $this->belongsTo('App\Models\Language','locale','value');
    }
}
