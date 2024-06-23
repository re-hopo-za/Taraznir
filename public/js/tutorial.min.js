(function (window, document, $) {

    var gridViewBtn = $('.rbt-grid-view'),
        listViewBTn = $('.rbt-list-view');

    $(gridViewBtn).on('click', function () {
        $(this).addClass('active').parent('.course-switch-item').siblings().children().removeClass('active');
        $('.rbt-course-grid-column').addClass('active-grid-view');
        $('.rbt-course-grid-column').removeClass('active-list-view');
        $('.rbt-card').removeClass('card-list-2');
    })

    $(listViewBTn).on('click', function () {
        $(this).addClass('active').parent('.course-switch-item').siblings().children().removeClass('active');
        $('.rbt-course-grid-column').removeClass('active-grid-view');
        $('.rbt-course-grid-column').addClass('active-list-view');
        $('.rbt-card').addClass('card-list-2');
    })


})(window, document, jQuery);
