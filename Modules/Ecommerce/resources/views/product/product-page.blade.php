<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 right-sidebar">
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

                        @if( $this->items && $this->items->isNotEmpty())
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
                            <div class="shop-item-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="product/{{$item->slug}}">
                                            <img src="{{$item->images['single']??''}}" alt="{{$item->title}}" />
                                        </a>
                                        <div class="options-box">
                                            <ul class="option-list">
                                                <li>
                                                    <a class="flaticon-resize" href="product/{{$item->slug}}"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h6>
                                            <a href="product/{{$item->slug}}">
                                                {{$item->title}}
                                            </a>
                                        </h6>
                                        <div class="lower-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span style="color: #adadad">
                                                    @lang('ecommerce::product.Price'):
                                                </span>
                                                <span>
                                                    {{get_meta_value_by_key($item ,'price' ,'تماس بگیرید')}}
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span style="color: #adadad;margin-bottom: 7px">
                                                    @lang('ecommerce::product.Stock'):
                                                </span>
                                                @if($stock = get_meta_value_by_key($item ,'stock'))
                                                    <span style="color: #1ec708">
                                                        {{$stock}}
                                                    </span>
                                                @else
                                                    <span style="color: #c70825">
                                                        @lang('ecommerce::product.Out of stock')
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                {{$this->items->links(data: ['scrollTo' => false])}}
            </div>
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12 left-sidebar">
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
                                    {{$category->title}}
                                </a>
                                @if($category->childrenCategories->count())
                                    <ul>
                                        @foreach($category->childrenCategories as $first_child)
                                            <li class="dropdown" {{$this->category_id === $first_child->id ? 'active' : ''}}>
                                                <a wire:click="setCategory({{$first_child->id}})" href="javascript:void(0)">
                                                    {{$first_child->title}}
                                                </a>
                                                @if($first_child->childrenCategories->count())
                                                    <ul>
                                                        @foreach($first_child->childrenCategories as $first_child_children)
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
            </div>
        </div>
    </div>
</div>
