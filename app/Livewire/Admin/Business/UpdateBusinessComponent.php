<?php
// public $name, $logo, $address, $layout, $phone, $map, $time_zone, $currency_symbol, $tax_name,
//     $email, $business_name, $currency, $tax_number, $start_date, $default_profit_percent, $owner_id,
//     $financial_year_start_month, $accounting_method, $enable_product_expiry, $on_product_expiry, $stop_selling_before,
//     $stock_expiry_alert_days, $enable_brand, $enable_category, $enable_sub_category, $enable_price_tax,
//     $enable_purchase_status, $enable_editing_product_from_purchase, $enable_inline_tax, $currency_symbol_placement,
//     $date_format, $time_format, $currency_precision, $quantity_precision, $theme_color, $is_active;

namespace App\Livewire\Admin\Business;

use App\Models\Business;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateBusinessComponent extends Component
{
    use WithFileUploads;
    public  $business;
    public $logo = null;


    public function mount()
    {
        $this->business = Business::first();
    }

    public function submit()
    {
        $this->validate();

        if ($this->logo != null) {
            //store('defult directory')
            $logoPath =  $this->logo->store('logo');
            $this->business->logo = $logoPath;
        }

        $this->business->save();
        flash(__('Saved successfully'));
    }

    public function updatedLogo()
    {
        $this->validateOnly('logo');
    }

    public function rules()
    {
        return [
            //business
            'business.name' => 'required',
            'business.date_format' => 'required',
            'business.time_format' => 'required',
            'logo' => 'image|mimes:png,jpg,jpeg,gif|nullable|sometimes|max:5000',
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
            //product
            'business.enable_product_expiry' => 'boolean',
            'business.expiry_type' => 'string',
            'business.on_product_expiry' => 'string',
            'business.stop_selling_before' => 'numeric|max:360|min:0',
            'business.enable_rack' => 'boolean',
            'business.enable_row' => 'boolean',
            'business.enable_position' => 'boolean',
            'business.enable_warranty' => 'boolean',
            //purchase
            'business.enable_editing_product_from_purchase' => 'boolean',
            //system
            'business.enable_help_text' => 'boolean',

        ];
    }

    public function render()
    {
        return view('admin.business.update-business-component');
    }
}
