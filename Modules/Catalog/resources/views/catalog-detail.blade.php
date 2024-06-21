@section('seo')
    {!! seo_tags_generator( $item ,null ,"$item->slug تارازنیر |  کاتالوگ | " ,true) !!}
@endsection


<div class="sidebar-page-container service-detail-page">
    <div class="container-fluid" style="padding: 0 70px;">
        <div class="row mt-none-30">

            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 right-sidebar">
                <div>
                    <div class="inner-box">
                        <embed src="{{$this->item->getMedia('attachment')->first()?->getUrl()}}" width="100%" height="2100px" />
                    </div>
                </div>
            </div>

            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12 left-sidebar" style="padding-left:40px;">
                <aside class="sidebar sticky-top">
                    <div>
                        @php
                            $items =
                                [
                                    __('catalog::catalog.title')     => $this->item->title,
                                    __('catalog::catalog.author')   => get_meta_value_by_key($item ,'country'   ,'-'),
                                    __('catalog::catalog.summary')   => $this->item->summary,
                                ];
                        @endphp
                        <livewire:theme::widgets.info-list-widget
                            :title="__('catalog::catalog.detail')"
                            :items="$items"
                        />

                        <x-theme::share-post :title="''" :container="false" :links="$this->share"/>

                        <livewire:theme::widgets.attachment-widget
                            :title="__('catalog::catalog.attachment_files')"
                            :model="$this->item"
                        />
                    </div>

                </aside>
            </div>


        </div>
    </div>
</div>

