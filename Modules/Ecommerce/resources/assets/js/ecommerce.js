document.addEventListener("DOMContentLoaded", (event) => {

    const lightbox = new PhotoSwipeLightbox({
        gallery: '#product-container',
        children: 'a',
        pswpModule: PhotoSwipe
    });
    lightbox.init();
});