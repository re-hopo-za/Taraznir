@section('seo')
    {!! seo_tags_generator( $seo ,'product' ,' تارازنیر | محصولات') !!}
@endsection

<x-theme::root :breads="[
    'title'  => ecommerce_trans('Products'),
    'breads' => [
        ['title' => ecommerce_trans('Products')]
    ],
]">
    <div class="filter-box">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="right-box d-flex">
                <div class="form-group">
                    <select wire:model="orderBy" wire:change="setOrder()">
                        <option value="ASC">جدیدترین</option>
                        <option value="DESC">قدیمی‌ترین</option>
                    </select>
                </div>
                <div class="form-group mx-2">
                    <select wire:model="limit" wire:change="setLimit">
                        <option value="12">12</option>
                        <option value="24">24</option>
                        <option value="48">48</option>
                    </select>
                </div>
            </div>

            @if($this->items && $this->items->isNotEmpty())
                @php( $to = $this->items->perPage() * $this->items->currentPage() +  $this->items->perPage())
                @php( $from = $to - $this->items->perPage())

                <div class="left-box d-flex align-items-center">
                    <div class="results">
                        نمایش
                        {{$from}}-{{$this->items->lastPage() === $this->items->currentPage() ? $this->items->total() : $to}}
                        از
                        {{$this->items->total()}}
                        نتیجه
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="row clearfix">
        @if($this->items)
            @foreach($this->items as $item)
                <div class="shop-item-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{product_slug($item)}}">
                                <img src="{{product_cover($item)}}" alt="{{product_name($item)}}" />
                            </a>
                            <div class="options-box">
                                <ul class="option-list">
                                    <li>
                                        <a class="flaticon-resize" href="{{product_slug($item)}}"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h6>
                                <a href="{{product_slug($item)}}">
                                    {{product_name($item)}}
                                </a>
                            </h6>
                            <div class="lower-box">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span style="color: #adadad">
                                        {{ecommerce_trans('Price')}}:
                                    </span>
                                    <span>
                                         {{product_price($item)}}
                                    </span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span style="color: #adadad;margin-bottom: 7px">
                                        {{ecommerce_trans('Stock')}}:
                                    </span>
                                    <span>
                                        {{product_stock($item)}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    {{$this->items->links(data: ['scrollTo' => false])}}
</x-theme::root>
