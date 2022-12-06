<div class="row-project parallax parallax-1 parallax-overlay" style="background-size: contain">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-1 text-center clearfix">
                    <h2 class="heading text-white">پروژه ویژه</h2>
                    <div class="sep has-icon width-125 border-color-light clearfix">
                        <div class="sep-icon">
                            <span class="sep-icon-before sep-center sep-solid"></span>
                            <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                            <span class="sep-icon-after sep-center sep-solid"></span>
                        </div>
                    </div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-carousel-box clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-auto="false">
                    <div class="owl-carousel owl-theme">
                        @if( !empty( $projects ) && $projects->isNotEmpty() )
                            @foreach( $projects as $project )
                                <div class="themesflat-project style-1 data-effect  clearfix">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                <img src="{{$project->images('thumbnail')}}" alt="{{$project->title}}" style="min-width: 400px;max-width: 400px;height: 300px;object-fit: cover;">
                                                <div class="text-wrap text-center">
                                                    <h5 class="heading"><a href="/project/{{$project->slug}}">{{$project->title}}</a></h5>
                                                    <div class="elm-meta">
                                                    @if( !empty( $project->categoreis )  )
                                                        @foreach( $project->categoreis as $cat )
                                                            <span><a href="/project/category/{{$cat->slug}}">{{$cat->title}}</a></span>
                                                        @endforeach
                                                    @endif
                                                    </div>
                                                </div>
                                                <div class="overlay-effect bg-color-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="41" data-mobile="35" data-smobile="35"></div>
                <div class="elm-button text-center">
                    <a href="{{route('Project')}}" class="themesflat-button bg-accent">همه پروژه ها </a>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
            </div>
        </div>
    </div>
    <div class="bg-parallax-overlay overlay-black"></div>
</div>
