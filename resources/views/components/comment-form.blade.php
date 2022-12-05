<div id="respond" class="comment-respond">
    <h3 id="reply-title" class="comment-reply-title margin-bottom-31 text-right">پیام بگذارید</h3>
    @if( !empty( $parentCreator ) )
        <div class="d-flex justify-content-between align-center ">
            <span>
               {{$parentCreator}} :
               پاسخ به
            </span>
            <span class="parent-remover" wire:click="removeParentComment({{$parentID}})"> لغو پاسخ </span>
        </div>
    @endif
    <form wire:submit.prevent="submit" method="post" class="comment-form" id="commentform" >
        @csrf
        @if( !Auth::check() )
            <div class="text-wrap clearfix">
                <fieldset class="name-wrap">
                    <input wire:model="name" type="text" id="author" class="tb-my-input text-right" name="author" dir="rtl" tabindex="1" placeholder="نام*" value="" size="32" aria-required="true">
                    @error('name') <span>{{ $message }}</span> @enderror
                </fieldset>
                <fieldset class="email-wrap">
                    <input wire:model="email" type="email" id="email" class="tb-my-input text-right" name="email" dir="rtl" tabindex="2" placeholder="ایمیل*" value="" size="32" aria-required="true">
                    @error('email') <span>{{ $message }}</span> @enderror
                </fieldset>
            </div>
        @endif
        <fieldset class="message-wrap">
            <textarea wire:model="comment" id="comment-message" name="comment" rows="8" tabindex="4" dir="rtl" placeholder="پیغام*" aria-required="true" class="text-right"></textarea>
            @error('comment') <span >{{ $message }}</span> @enderror
        </fieldset>
        <p class="form-submit">
            <input  name="submit" type="submit" id="comment-reply" class="submit" value="ارسال پیام">
            <input type="hidden" wire:model="postID" value="{{$postID}}" >
            <input type="hidden" wire:model="model" value="{{$model}}" >
            <input type="hidden" wire:model="parentID" value="{{$parentID}}" >
        </p>
        @if (session()->has('message'))
            <div class="alert alert-success text-right">
                {{ session('message') }}
            </div>
        @endif
    </form>
</div>


