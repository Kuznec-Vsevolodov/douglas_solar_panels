<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashFlow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_flow', function (Blueprint $table) {
            $table->id();
            $table->foreignId('model_id')->references('id')->on('model_parameters')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->float('revenue_ratio')->default(0);
            $table->float('opex_ratio')->default(0);
            $table->float('ebitda_ratio')->default(0);
            $table->float('capex_ratio')->default(0);
            $table->float('cash_flow_ratio')->default(0);
            $table->float('irr_pre_tax_ratio')->default(0);
            $table->float('irr_post_tax_ratio')->default(0);
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
        Schema::dropIfExists('cash_flow');
    }
}
