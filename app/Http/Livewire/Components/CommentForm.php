<?php

namespace App\Http\Livewire\Components;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentForm extends Component
{

    public $comment;
    public $name;
    public $email;
    public $model;
    public $postID;
    public $parentID;
    public $parentCreator;
    protected $listeners = ['setParent'];

    public function mount( $post ,$model )
    {
        $this->postID = $post->id;
        $this->model  = $model;
        if ( Auth::check() ) {
            $this->name = Auth::user()->name;
            $this->email = Auth::user()->email;
        }
    }


    protected array $rules = [
        'comment' => 'required',
        'name'    => 'required|min:2',
        'email'   => 'required|email'
    ];

    public function resetInput()
    {
        $this->comment = '';
        $this->name    = '';
        $this->email   = '';
    }

    public function setParent( $creator ,$commentID )
    {
        $this->parentCreator = $creator;
        $this->parentID = $commentID;
    }


    public function updated( $propertyName )
    {
        $this->validateOnly( $propertyName );
    }

    public function removeParentComment()
    {
        $this->parentID      = null;
        $this->parentCreator = null;
    }


    public function submit()
    {
        $validatedData = $this->validate();
        $newComment = new Comment();
        $newComment->comment  = $validatedData['comment'];
        $newComment->approved = 0;
        $newComment->parent_id = $this->parentID;
        $newComment->commentable_id   = $this->postID;
        $newComment->commentable_type = $this->model;

        if ( Auth::check() ) {
            $newComment->user_id = Auth::user()->id;
        }else {
            $newUser = new User();
            $newUser->name  = $validatedData['name'];
            $newUser->email = $validatedData['email'];
            $newUser->save();
            $newComment->user_id = $newUser->id;
        }
        $newComment->save();
        $this->resetInput();
        session()->flash('message', 'نظر شما ثبت شد , پس از بررسی منتشر میشود');
    }

    public function render(): View
    {
        return view('components.comment-form');
    }






}
