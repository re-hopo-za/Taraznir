'use strict';



import PhotoSwipeLightbox from '/vendor/photoswipe/photoswipe-lightbox.esm.js';




const options = {
    gallery:'#gallery',
    children:'a',
    pswpModule: () => import('/vendor/photoswipe/photoswipe.esm.js')
};
const lightbox = new PhotoSwipeLightbox(options);
lightbox.on('uiRegister', function() {
    lightbox.pswp.ui.registerElement({
        name: 'test-button',
        ariaLabel: 'Toggle zoom',
        order: 9,
        isButton: true,
        html: 'Test',
        onClick: (event, el) => {
            if ( confirm('Do you want to toggle zoom?') ) {
                lightbox.pswp.toggleZoom();
            }
        }
    });
});
lightbox.init();
