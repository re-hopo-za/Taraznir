<div id="inner-content" class="inner-content-wrap">
    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
    @if( !empty( $blogs ) )
        @foreach( $blogs as $blog )
            @php(  $meta = $blog->meta()->pluck('value','key')->toArray() )
            <article class="hentry data-effect">
                <div class="post-media has-effect-icon offset-v-25 offset-h-24 data-effect-item clerafix">
                    <a href="/blog/{{ $blog->slug }}">
                        <img src="{{ $blog->images( 'thumbnail') }}" alt="{{ $blog->title }}">
                    </a>
                    <div class="post-calendar">
                <span class="inner">
                    <span class="entry-calendar">
                        <span class="day">{{ $blog->created_at->format('d') }}</span>
                        <span class="month">{{ $blog->created_at->format('F') }}</span>
                    </span>
                </span>
                    </div>
                    <div class="overlay-effect bg-color-1"></div>
                    <div class="elm-link">
                        <a  href="/blog/{{ $blog->slug }}" class="icon-1"></a>
                    </div>
                </div>
                <div class="post-content-wrap clearfix" dir="rtl">
                    <h2 class="post-title">
                <span class="post-title-inner">
                    <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
                </span>
                    </h2>
                    <div class="post-meta">
                        <div class="post-meta-content">
                            <div class="post-meta-content-inner">
                                <span class="post-date item">
                                    <span class="inner">
                                        دسته بندی :
                                        @if( !empty( $blog->categories ) && $blog->categories->count() > 0 )
                                            @foreach( $blog->categories as $cat )
                                                <a href="/blog/category{{$cat->slug}}">
                                                    {{$cat->title}}
                                                </a>
                                            @endforeach
                                        @else
                                            بدون دسته بندی
                                        @endif
                                    </span>
                                </span>
                                <span class="post-by-author item"><span class="inner"><a href="#"> توسط : {{ indexChecker( $meta ,'author' ) }}</a></span></span>
                                <span class="comment item"><span class="inner"><a href="#">{{ count( $blog->comments ) > 0 ? $blog->comments.' نظر ' : '' }}</a></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-content post-excerpt">
                        <p>
                            {{$blog->summary}}
                        </p>
                    </div>
                    <div class="post-read-more">
                        <div class="post-link" dir="ltr">
                            <a href="/blog/{{ $blog->slug }}">بیشتر </a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    @endif
    <div class="blog-pagination">
        @if ($paginator->hasPages())
            <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
                <div class="flex justify-between flex-1 sm:hidden">
                <span>
                    @if ($paginator->onFirstPage())
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                            {!! __('pagination.previous') !!}
                        </span>
                    @else
                        <button wire:click="previousPage" wire:loading.attr="disabled" dusk="previousPage.before" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            {!! __('pagination.previous') !!}
                        </button>
                    @endif
                </span>
                    <span>
                    @if ($paginator->hasMorePages())
                            <button wire:click="nextPage" wire:loading.attr="disabled" dusk="nextPage.before" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            {!! __('pagination.next') !!}
                        </button>
                        @else
                            <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                            {!! __('pagination.next') !!}
                        </span>
                        @endif
                </span>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700 leading-5">
                            <span>{!! __('Showing') !!}</span>
                            <span class="font-medium">{{ $paginator->firstItem() }}</span>
                            <span>{!! __('to') !!}</span>
                            <span class="font-medium">{{ $paginator->lastItem() }}</span>
                            <span>{!! __('of') !!}</span>
                            <span class="font-medium">{{ $paginator->total() }}</span>
                            <span>{!! __('results') !!}</span>
                        </p>
                    </div>

                    <div>
                    <span class="relative z-0 inline-flex shadow-sm">
                        <span>
                            {{-- Previous Page Link --}}
                            @if ($paginator->onFirstPage())
                                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                    <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5" aria-hidden="true">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </span>
                            @else
                                <button wire:click="previousPage" dusk="previousPage.after" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @endif
                        </span>
                        @foreach ($elements as $element)
                            @if (is_string($element))
                                <span aria-disabled="true">
                                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                                </span>
                            @endif
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    <span wire:key="paginator-page{{ $page }}">
                                        @if ($page == $paginator->currentPage())
                                            <span aria-current="page">
                                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">{{ $page }}</span>
                                            </span>
                                        @else
                                            <button wire:click="gotoPage({{ $page }})" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </button>
                                        @endif
                                    </span>
                                @endforeach
                            @endif
                        @endforeach
                        <span>
                            @if ($paginator->hasMorePages())
                                <button wire:click="nextPage" dusk="nextPage.after" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @else
                                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                                    <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-r-md leading-5" aria-hidden="true">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </span>
                            @endif
                        </span>
                    </span>
                    </div>
                </div>
            </nav>
        @endif
    </div>
    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>

</div>
