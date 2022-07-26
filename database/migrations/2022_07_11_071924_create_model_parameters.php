<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelParameters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_parameters', function (Blueprint $table) {
            $table->id();
            $table->varchar('name')->default(null);
            $table->float('mw')->default(0);
            $table->float('power_price')->default(0);
            $table->float('inflation')->default(0);
            $table->date('end_power_term');
            $table->float('capex_devex')->default(0);
            $table->date('capex_devex_date');
            $table->date('construction_date');
            $table->date('operaton_date');
            $table->date('end_date');
            $table->float('opex_price')->default(0);
            $table->date('opex_start_date');
            $table->date('opex_end_date');
            $table->float('inverter_replacement_price')->default(0);
            $table->date('inverter_replacement_date');
            $table->float('degradation_factor')->default(0);
            $table->float('availiability')->default(0);
            $table->float('irradiation')->default(0);
            $table->float('perfomance_ratio')->default(0);
            $table->float('line_loss')->default(0);
            $table->float('tax_rate')->default(0);
            $table->float('cost_inflation')->default(0);
            $table->float('january_ratio')->default(0);
            $table->float('february_ratio')->default(0);
            $table->float('march_ratio')->default(0);
            $table->float('april_ratio')->default(0);
            $table->float('may_ratio')->default(0);
            $table->float('june_ratio')->default(0);
            $table->float('july_ratio')->default(0);
            $table->float('august_ratio')->default(0);
            $table->float('september_ratio')->default(0);
            $table->float('october_ratio')->default(0);
            $table->float('november_ratio')->default(0);
            $table->float('december_ratio')->default(0);

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_parameters');
    }
}
