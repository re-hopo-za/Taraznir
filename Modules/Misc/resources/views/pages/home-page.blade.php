@section('seo')
    {!! seo_tags_generator( $seo ,'home' ,' تارازنیر | خانه') !!}
@endsection


<x-theme::root :sidebar="false">
    <livewire:theme::components.main-slider />
    <livewire:theme::components.introduce-section />
    <livewire:service::service-section />
    <livewire:blog::blog-section />
    <livewire:project::project-section />
    <livewire:standard::standard-section />
    <livewire:ecommerce::product.product-section />
    <livewire:theme::components.clients-section />
</x-theme::root>
