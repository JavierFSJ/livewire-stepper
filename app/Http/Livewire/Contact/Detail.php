<?php

namespace App\Http\Livewire\Contact;

use App\Models\ContactDetail;
use Livewire\Component;

class Detail extends Component
{   

    public $extra;
    public $contact_general_id;


    protected $rules = [
        'extra' => 'required',
    ];

    public function submit()
    {   
        $this->validate();

        /* ContactDetail::create([
            'extra' => $this->extra,
            'contact_general_id' => 1,
        ]); */
    }

    public function render()
    {
        return view('livewire.contact.detail');
    }
}
