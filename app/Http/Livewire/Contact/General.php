<?php

namespace App\Http\Livewire\Contact;


use App\Models\ContactGeneral;
use Livewire\Component;

class General extends Component
{   
    public $subject; 
    public $type;
    public $message;

    public $step = 1;

    protected $listeners = ['changeStep'];

    protected $rules = [
        'subject' => 'required|min:2|max:255',
        'type' => 'required',
        'message' => 'required|min:2',
    ];

    public function submit(){
        $this->validate();
        $this->step = $this->type === 'company' ? 2 : 3;
        /* ContactGeneral::create([
            'subject' => $this->subject,
            'type' => $this->type,
            'message' => $this->message,
        ]); */
    }

    public function changeStep(int $step)
    {
        $this->step = $step;
    }

    public function render()
    {   
        /* Testing a las relaciones */
        //dd(ContactGeneral::find(1)->person);
        //dd(ContactPerson::find(1)->general);
        
        //dd(ContactCompany::find(1)->general);
        //dd(ContactGeneral::find(1)->company);

        //dd(ContactDetail::find(1)->general);
        //dd(ContactGeneral::find(1)->detail);
        return view('livewire.contact.general');
    }
}
