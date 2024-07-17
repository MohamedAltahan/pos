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
        Schema::create('invoce_layouts', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->foreignId('business_id')->constrained('businesses')->cascadeOnDelete();
            $table->text('header_text');
            $table->boolean('show_tax_label')->default(1);
            $table->boolean('show_clint_id')->default(1);
            $table->boolean('show_date_label')->default(1);
            $table->boolean('show_time_label')->default(1);
            $table->text('logo')->nullable();
            $table->boolean('show_logo')->default(1);
            $table->boolean('show_sku')->default(1);
            $table->boolean('show_expiry')->default(0);
            $table->boolean('show_image')->default(0);
            $table->boolean('show_description')->default(0);
            $table->boolean('show_sales_person')->default(1);
            $table->boolean('show_quantity_lable')->default(1);
            $table->boolean('show_unit_price_label')->default(1);
            $table->boolean('show_subtotal')->default(1);
            $table->boolean('show_company_name')->default(1);
            $table->boolean('show_company_location_name')->default(1);
            $table->boolean('show_country')->default(1);
            $table->boolean('show_city')->default(1);
            $table->boolean('show_state')->default(1);
            $table->boolean('show_landmark')->default(1);
            $table->boolean('show_mobile_number')->default(1);
            $table->boolean('show_email')->default(1);
            $table->boolean('show_tax_number')->default(0);
            $table->boolean('show_barcode')->default(0);
            $table->boolean('show_customer_label')->default(0);
            $table->text('footer_text')->nullable();
            $table->boolean('show_footer_text')->default(0);
            $table->boolean('is_default')->default(0);
            $table->text('qr_code')->nullable();
            $table->boolean('show_qr_code')->default(0);
            $table->text('desing')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoce_layouts');
    }
};
