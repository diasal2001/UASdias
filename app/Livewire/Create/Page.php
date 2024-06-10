<?php

namespace App\Livewire\Create;

use Livewire\Component;


class Page extends Component
{
    public $Pengirim;
    public $Penerima;
    public $pesan;
    public function render()
    {
        return view('livewire.create.page');
    }

    public function kirim(){
        dd($this->Pengirim, $this->Penerima, $this->pesan);
       
       
    }
}
