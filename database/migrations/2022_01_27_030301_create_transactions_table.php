<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->foreignId('outlet_id');
            $table->foreignId('customer_id');
            $table->foreignId('package_id');
            $table->string('quantity');
            $table->dateTime('deadline');
            $table->timestamp('paydate')->nullable();
            $table->double('additional_cost');
            $table->double('discount');
            $table->double('tax');
            $table->double('total_price');
            $table->enum('status', ['New', 'Process', 'Done', 'Accepted']);
            $table->enum('paid_status', ['Paid', 'Not paid']);
            $table->foreignId('user_id');
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
        Schema::dropIfExists('transactions');
    }
}