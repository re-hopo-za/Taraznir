@section('seo')
    {!! seo_tags_generator( $seo ,'product' ,' تارازنیر | محصولات') !!}
@endsection

<x-theme::root :breads="[
    'title'  => ecommerce_trans('Products'),
    'breads' => [
        ['title' => ecommerce_trans('Products')]
    ],
]">
    <x-theme::sidebar>
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
        <div class="row clearfix"  style="padding-bottom: 10rem;">
            @if($this->items)
                @foreach($this->items as $item)
                    <div class="shop-item-two col-lg-4 col-md-6 col-sm-12">
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
    </x-theme::sidebar>

    <x-theme::sidebar dir="left" left_side_class="p-0">
        <div class="select-categories" style="position: sticky; top: 90px;">
            <div class="category" dir="rtl">
                <div class="d-flex align-items-center gap-3">
                    <span class="icon flaticon-menu-3"></span>
                    <span style="font-family: AzarMehr;">انتخاب دسته‌بندی</span>
                </div>
                <span class="arrow flaticon-down-arrow"></span>
            </div>
            <ul class="categories-list">
                <li class="{{empty($this->category_id) ? 'active' : ''}}">
                    <a wire:click="setCategory(0)" href="javascript:void(0)" class="d-flex align-items-center" style="min-height: 30px">
                        <span class="icon d-flex align-items-center justify-content-center" style="min-width:40px;">
                             <span class="flaticon-close"></span>
                        </span>
                        همه موارد
                    </a>
                </li>
                @foreach($this->categories as $category)
                    <li class="{{$category->childrenCategories ? 'dropdown' : '' }} {{$this->category_id === $category->id ? 'active' : ''}}">
                        <a wire:click="setCategory({{$category->id}})" href="javascript:void(0)">
                            @if($category->media && $category->media->first())
                                <span class="icon">
                                    <img src="{{$category->media->first()->getFullUrl()}}" alt="{{$category->title}}" style="width:3rem">
                                </span>
                            @endif
                            {{$category->translateAttribute('name')}}
                        </a>

                        @if($category->children->count())
                            <ul>
                                @foreach($category->children as $first_child)
                                    <li class="dropdown" {{$this->category_id === $first_child->id ? 'active' : ''}}>
                                        <a wire:click="setCategory({{$first_child->id}})" href="javascript:void(0)">
                                            {{$first_child->title}}
                                        </a>
                                        @if($first_child->children->count())
                                            <ul>
                                                @foreach($first_child->children as $first_child_children)
                                                    <li class="{{$this->category_id === $first_child_children->id ? 'active' : ''}}">
                                                        <a wire:click="setCategory({{$first_child_children->id}})" href="javascript:void(0)">
                                                            {{$first_child_children->title}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <div class="dropdown-btn">
                                                <span class="fa fa-angle-down"></span>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            <div class="dropdown-btn">
                                <span class="fa fa-angle-down"></span>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </x-theme::sidebar>
</x-theme::root>
