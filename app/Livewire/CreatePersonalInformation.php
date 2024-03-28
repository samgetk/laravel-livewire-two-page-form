<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Carbon\Carbon;
use App\Models\PersonalInformation;


class CreatePersonalInformation extends Component
{

    public $currentPage = 1;

    #[Validate('required')]
    public $firstName;

    #[Validate('required')]
    public $lastName;

    #[Validate('required')]
    public $address;

    #[Validate('required')]
    public $city;

    #[Validate('required')]
    public $country;

    #[Validate('required', 'date of birth month')]
    public $dobMonth;

    #[Validate('required', 'date of birth day')]
    public $dobDay;

    #[Validate('required', 'date of birth year')]
    public $dobYear;

    public $marriageMonth;
    public $marriageDay;
    public $marriageYear;
    
    public $days;
    public $months;
    public $years;

    public $married = null;
    public $widowed = null;
    public $previouslyMarried = null;
    public $countryOfMarriage;   

   
    public function mount(){
        $this->days = range(1, 30);
        $this->months = range(1, 12);
        $this->years = range(date('Y'), date('Y') - 100);
    }
   

    public function submitPage1(){ $this->currentPage = 2; }

    public function submitPage2()
    {

        $this->validate();
        $dateOfBirth = Carbon::createFromFormat('Y-m-d', $this->dobYear . '-' . $this->dobMonth . '-' . $this->dobDay);
        if(!$this->married){
            if($this->marriageDay != null && $this->marriageMonth != null && $this->marriageYear != null ){
                $dateOfMarriage = Carbon::createFromFormat('Y-m-d', $this->marriageYear . '-' . $this->marriageMonth . '-' . $this->marriageDay);
            }
        }

        if ($this->married === 'yes' && Carbon::parse($dateOfBirth)->age < 18) {
            $this->addError('dateOfMarriage', 'You are not eligible to apply because your marriage occurred before your 18th birthday.');
            return;
        }

      
        $personalInformation = PersonalInformation::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'address' => $this->address,
            'city' => $this->city,
            'country' => $this->country,
            'date_of_birth' => $dateOfBirth,
            'date_of_marriage' => $dateOfMarriage ,
            'married' => $this->married,
            'country_of_marriage' => $this->countryOfMarriage,
            'widowed' => $this->widowed,
            'previously_married' => $this->previouslyMarried,
        ]);
      
        return redirect()->route('saved-information', ['id' => $personalInformation->id]);
    }

    public function nextPage()
    {
        $this->currentPage++;
    }

    public function prevPage()
    {
        $this->currentPage--;
    }

    public function toggleMarried($value)
    {
        $this->married = $value;
    }

    public function toggleWidowed($value)
    {
        $this->widowed = $value;
    }

    public function togglePreviouslyMarried($value)
    {
        $this->previouslyMarried = $value;
    }


    public function render()
    {
        return view('livewire.create-personal-information');
    }
}
