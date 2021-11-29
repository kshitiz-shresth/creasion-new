<?php

namespace App\Http\Livewire;

use App\VolunteerOpportunity;
use Livewire\Component;
use Mail;

class VolunteerForm extends Component
{
    public  
    $formData = [
        'days'=>[],
        'gender'=>'M'
    ];

    public function mount($myID)
    {
        $this->formData['formType'] = VolunteerOpportunity::find($myID)->title;
    }

    public function render()
    {
        return view('livewire.volunteer-form');
    }
    public function submit()
    {
        $formData = $this->formData;
        Mail::send('emails.volunteerWithUs', $formData, function ($message) use ($formData) {
            $message->from('volunteerwithus@creasion.org', 'Creasion Message Receiver');
            $message->to(['vfcnepal@creasion.org','thinleydoma@creasion.org']);
            $message->subject('Message From Website By ' . $formData['firstName']);
        });
        session()->flash('message', "We appreciate you contacting us. We will get back in touch with you soon!");
        $this->formData = [
            'days' => [],
            'gender' => 'M',
            'formType' => $formData['formType']
        ];
 
    }
}
