<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_status');
            $table->string('status')->nullable();
            $table->string('message')->nullable();
            $table->string('payment_data_id')->nullable();
            $table->string('domain')->nullable();
            $table->string('reference')->nullable();
            $table->string('paid_at')->nullable();
            $table->string('channel')->nullable();
            $table->string('currency')->nullable();
            $table->string('receipt_number')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('gateway_response')->nullable();
            $table->string('ip_address')->nullable();
            $table->decimal('fees', 10, 2)->nullable();
            $table->string('authorization_code')->nullable();
            $table->string('bin')->nullable();
            $table->string('last4')->nullable();
            $table->string('exp_month')->nullable();
            $table->string('exp_year')->nullable();
            $table->string('card_type')->nullable();
            $table->string('bank')->nullable();
            $table->string('country_code')->nullable();
            $table->string('brand')->nullable();
            $table->boolean('reusable')->nullable();
            $table->string('signature')->nullable();
            $table->string('account_name')->nullable();
            $table->string('receiver_bank_account_number')->nullable();
            $table->string('receiver_bank')->nullable();
            $table->string('customer_firstname')->nullable();
            $table->string('customer_lastname')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('transaction_date')->nullable();
            $table->boolean('active')->default(false);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('appointment_id')->constrained('appointments')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
