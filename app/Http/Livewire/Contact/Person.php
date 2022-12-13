<?php

namespace App\Http\Livewire\Contact;

use App\Models\ContactPerson;
use Livewire\Component;

class Person extends Component
{
    public $name;
    public $surname;
    public $contact_general_id;
    public $choices;
    public $other;


    protected $rules = [
        'name' => 'required',
        'surname' => 'required',
        'choices' => 'required',
        'other' => 'required',
    ];


    public function submit()
    {
        $this->validate();

        /* ContactPerson::create([
            'name' => $this->name,
            'surname' => $this->surname,
            'contact_general_id' => 1,
            'choices' => $this->choices,
            'other' => $this->other,
        ]); */
        $this->emit('changeStep' , 4);
    }


    public function render()
    {
        return view('livewire.contact.person');
    }
}
