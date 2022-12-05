<div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading text-left">
                    {{ getPageTranslatedTitle( $pageName ) }}
                </h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail text-right" dir="rtl">
                        <a href="/" class="trail-begin">خانه</a>
                        {!! breadcrumbsRender( $routes ) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
