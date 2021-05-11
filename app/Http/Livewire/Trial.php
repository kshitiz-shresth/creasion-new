<?php

namespace App\Http\Livewire;

use App\Livewire;
use Livewire\Component;

class Trial extends Component
{
    public $name = 0;
    public $title = [];
    public function doSomething()
    {
        $this->name++;
    }
    public function submit()
    {
        $toBeSavedTitle  = Livewire::find(1);
        $toBeSavedTitle['title']  = json_decode($this->title);
        $toBeSavedTitle->save();
        $this->emit('alert', ['type' => 'success', 'message' => 'Saved Successfully']);
       return $this->title;
    }
    public function hello(){
        array_push($this->title,'');
    }
    public function mount(){

    }
    public function render()
    {
        // $this->name = \App\Milestone::all();
        return view('livewire.trial');
    }


}
