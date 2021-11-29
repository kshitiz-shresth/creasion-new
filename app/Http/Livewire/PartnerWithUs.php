<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mail;

class PartnerWithUs extends Component
{
    public $firstName, $lastName, $middleName, $institutionName, $socialMediaOrWebsiteLink, $contactNumber, $address, $email, $briefDescription, $reasons;
    public function render()
    {
        return view('livewire.partner-with-us');
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'firstName' => 'required',
            'lastName' => 'required',
            'institutionName' => 'required',
            'contactNumber' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'briefDescription' => 'required | min:10',
            'reasons' => 'required | min:10',
        ]);
    }
    public function submit()
    {
        $formData =  $this->validate(
            [
                'firstName' => 'required',
                'lastName' => 'required',
                'institutionName' => 'required',
                'contactNumber' => 'required',
                'address' => 'required',
                'email' => 'required|email',
                'briefDescription' => 'required | min:10',
                'reasons' => 'required | min:10',
                'socialMediaOrWebsiteLink'=>'',
                'middleName'=>''
            ]
        );
        // Partner With Us
        Mail::send('emails.partnerWithUs', $formData, function ($message) use ($formData) {
            $message->from('partnerwithus@creasion.org', 'Creasion Message Receiver');
            $message->to(['info@creasion.org','thinleydoma@creasion.org']);
            $message->subject('Message From Website By ' . $formData['firstName']);
        });

        // Partner With Us Reply
        Mail::send('emails.partnerWithUsReply', $formData, function ($message) use ($formData) {
            $message->from('info@creasion.org', 'Creasion');
            $message->to($formData['email']);
            $message->subject('Message From Website By Creasion');
        });
        session()->flash('message', "We appreciate you contacting us. We will get back in touch with you soon!");
        $this->firstName = "";
        $this->lastName = "";
        $this->middleName ="";
        $this->institutionName = "";
        $this->socialMediaOrWebsiteLink = "";
        $this->contactNumber = "";
        $this->address = "";
        $this->email = "";
        $this->briefDescription = "";
        $this->reasons = "";

    }
}
