<?php

namespace App\Livewire\Read;

use Livewire\Component;
use App\Models\_Pesan;

class Page extends Component
{
    public $_Pesan;
    public function render()
    {
        $this->_Pesan = _pesan::all();
        return view('livewire.read.page');
    }
}
