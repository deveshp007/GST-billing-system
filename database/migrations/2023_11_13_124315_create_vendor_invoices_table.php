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
        Schema::create('vendor_invoices', function (Blueprint $table) {
            $table->id();
            $table->integer("party_id")->nullable();
            $table->date("invoice_date")->nullable();
            $table->string("invoice_no")->nullable();
            $table->text("item_description")->nullable();
            $table->float("total_amount", 10, 2)->default(0);
            $table->text("declaration")->nullable();
            $table->string("account_holder_name")->nullable();
            $table->string("account_no")->nullable();
            $table->string("bank_name")->nullable();
            $table->string("ifsc_code")->nullable();
            $table->text("branch_address")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_invoices');
    }
};
