@section('seo')
    {!! seo_tags_generator( $item ,null ,"$item->slug تارازنیر |  استاندارد | " ,true) !!}
@endsection


<x-theme::root :sidebar="false" :breads="[
    'title'  => standard_trans('Standard detail'),
    'breads' => [
        ['title' => standard_trans('Standards') ,'a' => '/standard'],
        ['title' => $item->title]
    ],
]">
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
                                        standard_trans('Title')     => $this->item->title,
                                        standard_trans('Country')   => get_meta_value_by_key($item ,'country'  ),
                                        standard_trans('Year')      => get_meta_value_by_key($item ,'year'     ),
                                        standard_trans('Group')     => get_meta_value_by_key($item ,'group'    ),
                                        standard_trans('Presenter') => get_meta_value_by_key($item ,'presenter'),
                                        standard_trans('Summary')   => $this->item->summary,
                                    ];
                            @endphp
                            <livewire:theme::widgets.info-list-widget
                                :title="standard_trans('Standard detail')"
                                :items="$items"
                            />

                            <x-theme::share-post :title="false" :container="false" :links="$this->share"/>

                            <livewire:theme::widgets.attachment-widget
                                :title="standard_trans('Attachment files')"
                                :model="$this->item"
                            />
                        </div>

                    </aside>
                </div>


            </div>
        </div>
    </div>
</x-theme::root>

