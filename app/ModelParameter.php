<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ModelParameter extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'mw', 
        'revenue_ratio',
        'inflation',
        'end_power_term',
        'capex_devex',
        'capex_devex_date',
        'construction_date',
        'operaton_date',
        'end_date',
        'opex_price',
        'opex_start_date',
        'opex_end_date',
        'inverter_replacement_price',
        'inverter_replacement_date',
        'degradation_factor',
        'availiability',
        'irradiation',
        'perfomance_ratio',
        'line_loss',
        'tax_rate',
        'cost_inflation',
        'january_ratio',
        'february_ratio',
        'march_ratio',
        'april_ratio',
        'may_ratio',
        'june_ratio',
        'july_ratio',
        'august_ratio',
        'september_ratio',
        'october_ratio',
        'november_ratio',
        'december_ratio',
        'user_id'
    ];
}
