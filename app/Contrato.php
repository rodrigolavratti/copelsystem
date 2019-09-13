<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'contract_number',
        'contract_type',
        'quantily',
        'data_start',
        'data_end'
    ];

    protected $guarded = ['id', 'created_at'];
    protected $table = 'contratos';
}
