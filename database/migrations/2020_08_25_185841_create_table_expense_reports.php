<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExpenseReports extends Migration
{

    // comando para crear migración
    // php artisan make:migration create_table_expense_reports --create=expense_reports


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_reports', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::dropIfExists('expense_reports');
    }
}
