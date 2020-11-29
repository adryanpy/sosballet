<?php namespace App\Models;

use CodeIgniter\Model;

/**
 * 
 */
class BalletShoesModel extends Model
{
	
	protected $table = 'balletShoesCtrl';
	protected $primaryKey = 'user_id';
	protected $allowedFields = [
		'bs_type',
		'test_time',
		'class_time',
	];
	protected $returnType = 'object';
}