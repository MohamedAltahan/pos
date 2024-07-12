<?php

namespace App\Livewire\Admin\Business;

use App\Models\Business;
use Livewire\Component;

class UpdateBusinessComponent extends Component
{
    public  $business;

    public function mount()
    {
        $this->business = Business::first();
    }

    // public $name, $logo, $address, $layout, $phone, $map, $time_zone, $currency_symbol, $tax_name,
    //     $email, $business_name, $currency, $tax_number, $start_date, $default_profit_percent, $owner_id,
    //     $financial_year_start_month, $accounting_method, $enable_product_expiry, $on_product_expiry, $stop_selling_before,
    //     $stock_expiry_alert_days, $enable_brand, $enable_category, $enable_sub_category, $enable_price_tax,
    //     $enable_purchase_status, $enable_editing_product_from_purchase, $enable_inline_tax, $currency_symbol_placement,
    //     $date_format, $time_format, $currency_precision, $quantity_precision, $theme_color, $is_active;



    public function submit()
    {
        $this->validate($this->rules());
        $this->business->save();
        flash(__('Saved successfully'));
    }

    public function rules()
    {
        return [
            'business.name' => 'required',
            'business.date_format' => 'required',
            'business.time_format' => 'required',
            'business.logo' => 'image|nullable',
            'business.phone' => 'string|nullable',
            'business.layout' => 'required',
            'business.address' => 'string|nullable',
            'business.map' => 'string|nullable',
            'business.email' => 'email|nullable',
            'business.start_date' => 'required',
            'business.currency' => 'required',
            'business.currency_symbol' => 'max:5',
            'business.time_zone' => 'required',
            'business.currency_precision' => 'required',
            'business.quantity_precision' => 'required',
        ];
    }

    public function render()
    {
        return view('admin.business.update-business-component');
    }
}
