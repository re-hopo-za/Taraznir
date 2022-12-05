@php( $comments = $comments->where('approved',1) )
<div id="comments" class="comments-area">
    <h2 class="comments-title text-right" dir="rtl">
        {{ count( $comments ) > 0 ? count( $comments ) . ' دیدگاه' : 'بدون دیدگاه' }}
    </h2>
    @if( !empty( $comments ))
        @foreach( $comments  as $comment )
            <ol class="comment-list">
                @if( $comment->parent_id == 0 )
                <li class="comment">
                    <article class="comment-wrap clearfix d-flex flex-row-reverse" >
                        <div class="gravatar">
                            <img alt="image" src="https://ui-avatars.com/api/?name={{$comment->user->name}}&color=FFFFFF&background={{randomColor()}}'" />
                        </div>
                        <div class="comment-content" style="width: 85%" >
                            <div class="comment-meta d-flex justify-content-between pt-2">
                                <span class="comment-time">{{$comment->created_at->format('Y-m-d H:i') }}</span>
                                <h6 class="comment-author">{{$comment->user->name}}</h6>
                                <span class="comment-reply">
                                    <span class="comment-reply-link" style="color:#ffc30c;cursor:pointer" wire:click="setParent('{{$comment->user->name}}',{{$comment->id}})">پاسخ</span>
                                </span>
                            </div>
                            <div class="comment-text text-right pr-3">
                                <p>{{$comment->comment}} </p>
                            </div>
                        </div>
                    </article>
                    @php( $children = $comment->children->where('approved',1) )
                    @if( !empty( $children ) )
                    <ul class="children">
                        @foreach( $children as $child )
                            <li class="comment">
                                <article class="comment-wrap clearfix d-flex flex-row-reverse" >
                                    <div class="gravatar">
                                        <img alt="image" src="https://ui-avatars.com/api/?name={{$child->user->name}}&color=FFFFFF&background={{randomColor()}}'" />
                                    </div>
                                    <div class="comment-content" style="width: 90%" >
                                        <div class="comment-meta d-flex justify-content-between  pt-2">
                                            <span class="comment-time">{{$child->created_at->format('Y-m-d H:i')}}</span>
                                            <h6 class="comment-author">{{$child->user->name}}</h6>
                                        </div>
                                        <div class="comment-text text-right pr-3">
                                            <p>{{$child->comment}} </p>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endif
        @endforeach
    @endif
    </ol>
</div>
