<?php

namespace App\Http\Livewire\Pages;

use App\Models\FormEntry;
use App\Models\Option;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ContactPage extends Component
{

    public $firstName;
    public $email;
    public $mobile;
    public $project;
    public $text;

    protected $rules = [
        'firstName' => 'required|max:20',
        'email'     => 'required|email',
        'project'   => 'required',
        'text'      => 'required|min:100',
        'mobile'    => '',
    ];

    public function updated($propertyName)
    {
        $validation = $this->validateOnly($propertyName);
    }

    public function save() {
        $validatedData = $this->validate();
        if ( !empty( $validatedData ) ){
            $entryForm = new FormEntry();
            $entryForm->form_id = 'contact';
            $entryForm->data  = [
                'email'   => $validatedData['email'],
                'mobile'  => $validatedData['mobile'],
                'project' => $validatedData['project'],
                'text'    => $validatedData['text']
            ];
            $entryForm->user_id = Auth::id();
            $entryForm->save();
            $this->reset();
            $this->emit('contactFormSubmitted');
        }
    }

    public function render()
    {
        $seo = redisHandler( 'contact_page_seo' ,function (){
            return Option::where('key' ,'contact_page_seo')->first();
        });

        return view('pages.contact-page' ,[
            'seo' => $seo
        ]);
    }
}
