@section('seo')
    {!! seo_tags_generator( $seo ,'search' ,' تارازنیر | صفحه جستجو') !!}
@endsection


<x-theme::root :sidebar="false" :breads="[
    'title'  => global_trans('Search'),
    'breads' => [
        ['title' => global_trans('Search')],
    ],
]">

    <div class="contact-page-section">
        <div class="auto-container">



        </div>
    </div>
</x-theme::root>

