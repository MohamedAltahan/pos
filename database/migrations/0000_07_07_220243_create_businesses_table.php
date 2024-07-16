<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $today = Carbon::now();
        Schema::create('businesses', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('address')->nullable();
            $table->string('layout')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('currency');
            $table->text('map')->nullable();
            $table->string('time_zone');
            $table->string('currency_symbol')->nullable();
            $table->string('tax_name')->nullable();
            $table->string('tax_number',)->nullable();
            $table->date('start_date')->nullable();
            $table->float('default_profit_percent', 7)->nullable();
            $table->foreignId('owner_id');
            $table->tinyInteger('financial_year_start_month')->default(1);
            $table->enum('accounting_method', ['fifo', 'lifo', 'avco'])->default('fifo');
            $table->boolean('enable_product_expiry')->default(0);
            $table->enum('expiry_type', ['add_expiry', 'add_manufacturing'])->default('add_expiry');
            $table->enum('on_product_expiry', ['keep_selling', 'stop_selling'])->default('keep_selling');
            $table->smallInteger('stop_selling_before')->default(7)->comment('Stop selling expied item n days before expiry');
            $table->smallInteger('stock_expiry_alert_days')->default(7);
            $table->boolean('enable_brand')->default(1);
            $table->boolean('enable_category')->default(1);
            $table->boolean('enable_sub_category')->default(1);
            $table->boolean('enable_price_tax')->default(1);

            $table->boolean('enable_purchase_status')->default(1);
            $table->boolean('enable_rack')->default(0);
            $table->boolean('enable_row')->default(0);
            $table->boolean('enable_position')->default(0);
            $table->boolean('enable_warranty')->default(0);

            $table->boolean('enable_editing_product_from_purchase')->default(1);
            $table->boolean('enable_inline_tax')->default(1);
            $table->enum('currency_symbol_placement', ['before', 'after'])->default('after');
            $table->string('date_format')->default('d/m/Y');
            $table->enum('time_format', ['12', '24'])->default('12');
            $table->tinyInteger('currency_precision')->default(2);
            $table->tinyInteger('quantity_precision')->default(2);
            $table->string('theme_color')->nullable();
            $table->boolean('is_active')->default(1);

            $table->boolean('enable_help_text')->default(1);

            $table->json('email_setting')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
