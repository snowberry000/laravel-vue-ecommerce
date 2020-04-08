<?php

/**
 * Wallet Model
 *
 * @package    GoferEats
 * @subpackage Model
 * @category   Wallet
 * @author     Quickshopper Product Team
 * @version    1.0
 * @link       https://www.quickshopper.co.uk
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //use CurrencyConversion;

    protected $table = 'wallet';

    protected $fillable = ['user_id', 'amount','currency_code'];
    protected $appends = ['original_amount'];
    public $timestamps = false;

    protected $convert_fields = ['amount', 'original_amount'];
    public $disable_admin_panel_convertion = true;

    protected $primaryKey = 'user_id';

    public function getAmountAttribute()
    {
        return number_format(($this->attributes['amount']),2,'.',''); 
    }
    public function getOriginalAmountAttribute()
    {
        return $this->attributes['amount'];
    }
}
