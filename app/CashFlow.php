<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CashFlow extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model_id',
        'user_id', 
        'revenue_ratio',
        'opex_ratio',
        'ebitda_ratio',
        'capex_ratio',
        'cash_flow_ratio',
        'irr_pre_tax_ratio',
        'irr_post_tax_ratio'
    ];
}
