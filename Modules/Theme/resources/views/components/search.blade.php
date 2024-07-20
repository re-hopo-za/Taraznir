@props([
    'dir' => 'right',
    'left_side_class' => false
])


@if(!$this->properMobile)
    <div class="options-box d-flex align-items-center">
        <div class="search-box-two">
            <div method="post" action="contact.html">
                <div class="form-group">
                    <input
                        wire:model.live="keyword"
                        type="search"
                        name="search-field"
                        placeholder="جستجو"
                    />
                    <button type="submit">
                        <span class="icon flaticon-search"></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="mobile-nav-toggler">
            <span class="icon flaticon-menu"></span>
        </div>

        <div class="searched-result" style="position: absolute; top: 50px;">
            @foreach($this->foundItems as $model => $items)
                <div class="model-item" dir="rtl">
                    <div class="sidebar-title">
                        <h4>{{$this->modelsDetail[$model]['title'] ?? 'نتایج جستجو'}}</h4>
                    </div>
                    @foreach($items as $item)
                        <div class="post">
                            <div class="thumb">
                                <a href="{{$this->modelsDetail[$model]['slug'] ?? ''}}/{{$item->slug}}">
                                    <img src="{{$item->images['cover']??''}}" alt="{{$item->title}}" />
                                </a>
                            </div>
                            <h6>
                                <a href="{{$this->modelsDetail[$model]['slug'] ?? ''}}/{{$item->slug}}">
                                    Don’t Underestimate The Software
                                </a>
                            </h6>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>


@else
    <div class="search-box">
        <div>
            <div class="form-group">
                <input wire:model.live="keyword" type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
                <button type="submit"><span class="icon flaticon-search-1"></span></button>
            </div>
        </div>
    </div>
@endif
