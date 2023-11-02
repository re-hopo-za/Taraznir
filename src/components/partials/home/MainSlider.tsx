'use client'
import { Swiper, SwiperSlide } from 'swiper/react';
import { Swiper as SwiperInterface } from 'swiper';

import { Autoplay, Keyboard, Pagination, Scrollbar, Zoom } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/autoplay';
import 'swiper/css/keyboard';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import 'swiper/css/zoom';
import 'swiper/css/navigation';
import {useState} from "react";

export function MainSlider () {
    const [swiperInstance , setSwiperInstance] = useState<SwiperInterface>();
    const [prevPale ,setPrevPale] = useState(true);
    const [nextPale ,setNextPale] = useState(false);
    const onSlideChange = ()=>{
        // @ts-ignore
        if( swiperInstance.activeIndex + 1  == swiperInstance.slides.length ){
            setNextPale( true );
            setPrevPale(false)
            // @ts-ignore
        }else if( swiperInstance.activeIndex == 0 ){
            setNextPale( false );
            setPrevPale(true)
        }else{
            setNextPale( false );
            setPrevPale(false)
        }
    }



    return(
        <section className="main-slider-two">
            <div className="swiper__arrows" dir="rtl">
                <div
                    className="swiper-button-prev-- "
                    // @ts-ignore
                    onClick={()=>swiperInstance.slidePrev(500)}
                    style={{background:prevPale ? 'black' :'#ffc30c' ,cursor:nextPale ? 'pointer' :'initial'}}
                >
                    <div className="flaticon-right-arrow"></div>
                </div>
                <div
                    className="arrow-icon swiper-button-next--"
                    // @ts-ignore
                    onClick={()=>swiperInstance.slideNext(500)}
                    style={{background:nextPale ? 'black' :'#ffc30c' ,cursor:nextPale ? 'pointer' :'initial'}}
                >
                    <div className="flaticon-left-arrow"></div>
                </div>
            </div>
            <Swiper
                dir="rtl"
                modules={[Autoplay, Keyboard, Pagination, Scrollbar, Zoom]}
                autoplay={false}
                keyboard={true}
                pagination={false}
                scrollbar={true}
                zoom={true}
                loop={false}
                freeMode={true}
                onSlideChangeTransitionEnd={() => onSlideChange()}
                onSwiper={(swiper) => setSwiperInstance(swiper)}
                className="main-slider-carousel"
            >
                <SwiperSlide className="slide" dir="ltr">
                    <div
                        className="image-layer"
                        style={{ backgroundImage: "url(/images/main-slider/image-2.jpg)" }}
                    />
                    <div
                        className="vector-icon"
                        style={{ backgroundImage: "url(/images/main-slider/vector-4.png)" }}
                    />
                    <div className="auto-container">
                        <div className="content-box">
                            <div
                                className="pattern-layer"
                                style={{ backgroundImage: "url(/images/main-slider/pattern-1.png)" }}
                            />
                            <div className="box-inner">
                                <div className="title">2022 Collection</div>
                                <h1>Furniture Collection</h1>
                                <div className="text">
                                    Increase productivity with a simple to-do app
                                </div>
                                <div className="price">
                                    Starting From <span>$560.99</span>
                                </div>
                                <div className="button-box">
                                    <a href="shop.html" className="theme-btn btn-style-one">
                                        Shop Now <span className="icon flaticon-right-arrow" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="off-box">
                        40%
                        <span>off</span>
                    </div>
                </SwiperSlide>
                <SwiperSlide className="slide" dir="ltr">
                    <div
                        className="image-layer"
                        style={{ backgroundImage: "url(images/main-slider/image-2.jpg)" }}
                    />
                    <div
                        className="vector-icon"
                        style={{ backgroundImage: "url(images/main-slider/vector-4.png)" }}
                    />
                    <div className="auto-container">
                        <div className="content-box">
                            <div
                                className="pattern-layer"
                                style={{ backgroundImage: "url(images/main-slider/pattern-1.png)" }}
                            />
                            <div className="box-inner">
                                <div className="title">2022 Collection</div>
                                <h1>Furniture Collection</h1>
                                <div className="text">
                                    Increase productivity with a simple to-do app
                                </div>
                                <div className="price">
                                    Starting From <span>$560.99</span>
                                </div>
                                <div className="button-box">
                                    <a href="shop.html" className="theme-btn btn-style-one">
                                        Shop Now <span className="icon flaticon-right-arrow" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="off-box">
                        40%
                        <span>off</span>
                    </div>
                </SwiperSlide>
                <SwiperSlide className="slide" dir="ltr">
                    <div
                        className="image-layer"
                        style={{ backgroundImage: "url(images/main-slider/image-2.jpg)" }}
                    />
                    <div
                        className="vector-icon"
                        style={{ backgroundImage: "url(images/main-slider/vector-4.png)" }}
                    />
                    <div className="auto-container">
                        <div className="content-box">
                            <div
                                className="pattern-layer"
                                style={{ backgroundImage: "url(images/main-slider/pattern-1.png)" }}
                            />
                            <div className="box-inner">
                                <div className="title">2022 Collection</div>
                                <h1>Furniture Collection</h1>
                                <div className="text">
                                    Increase productivity with a simple to-do app
                                </div>
                                <div className="price">
                                    Starting From <span>$560.99</span>
                                </div>
                                <div className="button-box">
                                    <a href="shop.html" className="theme-btn btn-style-one">
                                        Shop Now <span className="icon flaticon-right-arrow" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="off-box">
                        40%
                        <span>off</span>
                    </div>
                </SwiperSlide>
            </Swiper>
            <div className="side-title">New Arrival</div>
            <div className="social-box">
                <a href="#">Tw.</a>
                <a href="#">Fa.</a>
                <a href="#">In.</a>
            </div>
        </section>
    )
}

