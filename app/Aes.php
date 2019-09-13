<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aes extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'number_aes',
        'contract_number',
        'project_number',
        'id_empreiteira',
        'data_start',
        'data_end'
    ];
    protected $guarded = ['id', 'created_at'];
    protected $table = 'aes';
}
