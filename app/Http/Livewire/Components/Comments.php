<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Comments extends Component
{

    public ?object $comments;
    public function mount( $comments )
    {
        $this->comments = $comments ;
    }


    public function setParent( $creator ,$commentID )
    {
        $this->emit('setParent' ,$creator ,$commentID );
    }


    public function render()
    {
        return view('components.comments' ,[
            'comments' => $this->comments
        ]);
    }






}
