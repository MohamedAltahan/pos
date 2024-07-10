<?php

namespace App\Livewire\Admin\Business;

use Livewire\Component;

class BusinessComponent extends Component
{
    public $email;
    public $business_name;
    public $currency;

    public function submit()
    {
        $this->validate();
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'business_name' => 'required|string',
            'currency' => 'required'
        ];
    }

    public function render()
    {
        return view('admin.business.business-component');
    }
}
