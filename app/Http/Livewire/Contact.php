<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mail;
class Contact extends Component
{
    public $name, $email, $formMessage, $phoneNumber;
    public function render()
    {
        return view('livewire.contact');
    }

    public function updated($fields){
        $formData = $this->validateOnly($fields,
            [
                'name' => 'required',
                'email' => 'required|email',
                'phoneNumber' => 'required|min:6|max:14',
                'formMessage' => 'required|min:4',
            ]
            );
    }

    public function submit(){
       $formData =  $this->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phoneNumber' => 'required|min:6|max:14',
                'formMessage' => 'required|min:4',
            ]
        );
        Mail::send('emails.contact', $formData, function ($message) use ($formData) {
            $message->from('receiver@creasion.org', 'Creasion Message Receiver');
            $message->to(['info@creasion.org','thinleydoma@creasion.org']);
            $message->subject('Message From Website By ' . $formData['name']);
        });
        session()->flash('message', "We appreciate you contacting us. We will get back in touch with you soon!");
        $this->name = "";
        $this->phoneNumber = "";
        $this->email = "";
        $this->formMessage = "";
        


        // dd('done'); 
        
    

    }
}
