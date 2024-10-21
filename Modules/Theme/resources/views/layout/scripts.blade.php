<script src="/js/scripts.min.js" ></script>
<script src="/js/modules.min.js" ></script>
@livewireScripts
@commentsScripts
<x-livewire-alert::scripts />


<script type="text/javascript">
    document.addEventListener('livewire:init', function () {
        Livewire.on('url-change', ({ url }) => {
            console.log(url)
            history.pushState(null, null, url);
        })

    });
</script>


@stack('scripts')


