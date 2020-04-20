<?php

/**
 * File Model
 *
 * @package    GoferEats
 * @subpackage Model
 * @category   File
 * @author     Quickshopper Product Team
 * @version    1.0
 * @link       https://www.quickshopper.co.uk
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;

class File extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $table = 'file';

	protected $fillable = ['name'];

	protected $appends = ['image_name', 'store_document','file_extension'];

	public $fileTypeArray = [];

	public function __construct() {
		parent::__construct();
		$this->fileTypeArray = FileType::get()->pluck('id', 'name');
	}

	public function getImageNameAttribute() {
		if ($this->attributes['type'] == 3 || $this->attributes['type'] == 4) {
			$folder = env('AWS_BUCKET_STORE_IMG_DIR') . $this->attributes['source_id'] . '/';
		} elseif ($this->attributes['type'] == 2) {
			$folder = env('AWS_BUCKET_EATER_IMG_DIR');
		} else {
			$folder = env('AWS_BUCKET_DRIVER_IMG_DIR');
		}

		if ($this->attributes['name']) {
			$images = url(Storage::disk('s3')->url($folder . $this->attributes['name']));
		} else {
			$images = '';
		}

		return $images;
	}

	public function scopeType($query, $type) {
		$file_type = $this->fileTypeArray[$type];
		return $query->where('type', $file_type);
	}

	public function getStoreDocumentAttribute() {

		if ($this->name) {
			return url(Storage::disk('s3')->url(env('AWS_BUCKET_STORE_IMG_DIR') . $this->source_id . '/documents/' . $this->name));
		} else {
			return sample_image();
		}

	}
	//store_home_slider_image
	public function getStoreHomeSliderImageAttribute() {
		if ($this->attributes['name']) {
			return env('AWS_BUCKET_STOREHOMESLIDER_IMG_DIR') . '/'. $this->name;
		} else {
			return sample_image();
		}

	}
	//eater_home_slider_image
	public function getEaterHomeSliderImageAttribute() {
		if ($this->attributes['name']) {			
			return env('AWS_BUCKET_EATERHOMESLIDER_IMG_DIR') . '/' . $this->name;
		} else {
			return sample_image();
		}

	}

	//site_image_url
	public function getSiteImageUrlAttribute() {
		return env("AWS_BUCKET_SITESETTING_IMG_DIR") . '/' . $this->attributes['name'];
	}

	//file_extension
	public function getFileExtensionAttribute() {
		$name = explode('.', $this->attributes['name']);
		if(isset($name[1]))
			return strtolower($name[1]);
	}
}
