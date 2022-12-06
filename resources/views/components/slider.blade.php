<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider1" class="rev_slider fullwidthabanner">
        <ul>
            @if( !empty( $sliders ) && $sliders->count() > 0 )
                @foreach( $sliders as $slider )
                    @php $meta = $slider->meta()->pluck('value' ,'key')->toArray(); @endphp
                    <li data-transition="random">
                        <img src="{{$slider->attachment('attachments')}}" alt="{{indexChecker($meta ,'title')}}" data-bgposition="center center" data-no-retina>
                        <div class="tp-caption tp-resizeme text-white font-heading font-weight-600"
                             data-x="{{sliderPosition( indexChecker( $meta ,'position') ) }}" data-hoffset="['34','34','34','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-134','-134','-134','-134']"
                             data-fontsize="['20','20','20','16']"
                             data-lineheight="['70','70','40','24']"
                             data-width="full"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="700"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            {{indexChecker($meta ,'title')}}
                        </div>

                        @php( $subtitle = explode( '|', indexChecker( $meta ,'subtitle' ) ) )
                        @if( !empty( $subtitle ) )
                            @foreach( $subtitle as $sub )
                                <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                                     data-x="{{sliderPosition( indexChecker( $meta ,'position') ) }}" data-hoffset="['34','34','34','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['2','2','2','2']"
                                     data-fontsize="['52','52','42','32']"
                                     data-lineheight="['65','65','45','35']"
                                     data-width="full"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];"
                                     data-mask_out="x:inherit;y:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on">
                                    {{$sub}}
                                </div>
                            @endforeach
                        @endif
                        <div class="tp-caption"
                             data-x="{{sliderPosition( indexChecker( $meta ,'position') ) }}" data-hoffset="['34','34','34','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['106','106','106','106']"
                             data-width="full"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <a href="{{indexChecker( $meta ,'button_link')}}" class="themesflat-button bg-accent big"><span>{{indexChecker( $meta ,'button_text')}}</span></a>
                        </div>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>

