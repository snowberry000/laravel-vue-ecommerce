<?php

/**
 * ReviewIssue Model
 *
 * @package    GoferEats
 * @subpackage Model
 * @category   ReviewIssue
 * @author     Quickshopper Product Team
 * @version    1.0
 * @link       https://www.quickshopper.co.uk
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class ReviewIssue extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'review_issue';

    public $timestamps = false;

    // Join with Menu table
	public function issue_type() {
		return $this->belongsTo('App\Models\IssueType', 'issue_id', 'id');
	}
}
