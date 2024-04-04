<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Course extends Component
{

    public $courses = '';

    public function mount()
    {
        $this->updateCourse();
    }

    public function updateCourse()
    {
        $params = [
            'get' => 'rates',
            'pairs' => 'USDKZT', 
            'key' => '42d43cbbae705314e5eb1622847f0b07'
        ];

        $response = Http::get('https://currate.ru/api/', $params);
        
        $this->courses = $response->json()['data']['USDKZT'];
    }
 

    public function render()
    {
        return view('livewire.course');
    }
}
