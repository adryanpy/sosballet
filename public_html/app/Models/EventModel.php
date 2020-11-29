<?php namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title',
        'description',
        'start',
        'end',
        'allDay',
        'borderColor',
        'backgroundColor',
        'url',
        'user_id'
    ];

    protected $returnType = 'object';
    
}

?>