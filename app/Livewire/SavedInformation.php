<?php

namespace App\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\PersonalInformation;

class SavedInformation extends Component
{
    public $personalInformation;

    /**
     * @param $id
     * @return void
     */
    public function mount($id)
    {
        $this->personalInformation = PersonalInformation::findOrFail($id);
    }


    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function render()
    {
        return view('livewire.saved-information');
    }
}
