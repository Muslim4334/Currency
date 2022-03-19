<?php

namespace Muslim\Currency\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'code',
        'buy_price',
        'cell_price',
        'data',
        '_token',
    ];
}
