<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Attachment extends Component
{
    public ?object $attachments;

    public function mount( $post )
    {
        $this->attachments = $post->attachments();
    }

    public function render()
    {
        return view('components.attachment' ,[
            'attachments' => $this->attachments
        ]);
    }


}
