<?php

namespace App\Http\Livewire\Contact;

use App\Models\ContactCompany;
use Livewire\Component;

class Company extends Component
{

    public $name;
    public $identification;
    public $email;
    public $choices;
    public $contact_general_id;
    public $extra;
    

    protected $rules = [
        'name' => 'required',
        'identification' => 'required',
        'email' => 'required|email',
        'extra' => 'required',
        'choices' => 'required',
    ];



    public function submit()
    {
        $this->validate();

       /*  ContactCompany::create([
            'name' => $this->name,
            'identification' => $this->identification,
            'email' => $this->email,
            'extra' => $this->extra,
            'choices' => $this->choices,
            'contact_general_id' => 1,
        ]); */
        $this->emit('changeStep' , 4);
    }



    public function render()
    {
        return view('livewire.contact.company');
    }
}
