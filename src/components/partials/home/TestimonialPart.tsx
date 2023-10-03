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
import {OptionType} from "../../../../types/OptionType";


export default function TestimonialPart ({items}:{items:OptionType[]}) {
    const [swiperInstance , setSwiperInstance] = useState<SwiperInterface>();
    const [activeSlide ,setActiveSlide ] = useState(0);


    return(
        <section className="testimonial-section">
            <div
                className="pattern-layer"
                style={{ backgroundImage: "url(images/background/pattern-3.png)" }}
            />
            <div className="auto-container">
                <div className="inner-container">
                    <div
                        className="pattern-layer-two"
                        style={{ backgroundImage: "url(images/background/pattern-4.png)" }}
                    />
                    <div
                        className="vector-layer"
                        style={{ backgroundImage: "url(images/background/pattern-2.png)" }}
                    />
                    <Swiper
                        className="single-item-carousel"
                        modules={[Autoplay, Keyboard, Pagination, Scrollbar, Zoom]}
                        autoplay={false}
                        zoom={true}
                        loop={false}
                        freeMode={true}
                        // @ts-ignore
                        onSlideChangeTransitionEnd={()=>setActiveSlide(swiperInstance.activeIndex)}
                        onSwiper={(swiper) => setSwiperInstance(swiper)}
                    >
                        {
                            items && items.map( (item : any ,k : number) =>
                                <SwiperSlide key={k} className="testimonial-block">
                                    <div className="inner-box">
                                        <div className="row clearfix">
                                            <div className="image-column col-lg-4 col-md-12 col-sm-12">
                                                <div className="inner-column">
                                                    <div
                                                        className="arrow-layer"
                                                        style={{ backgroundImage: "url(images/icons/arrow-2.png)" }}
                                                    />
                                                    <div className="image">
                                                        <img src={item.images?.thumbnail} alt={item.key} />
                                                        <ul className="social-box">
                                                            <li>
                                                                <a
                                                                    href="https://www.facebook.com/"
                                                                    className="fa fa-facebook-f"
                                                                />
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="content-column col-lg-8 col-md-12 col-sm-12">
                                                <div className="inner-column">
                                                    <div className="rating">
                                                        {[...Array(Number(item.meta.find((meta:any) => meta.key == 'rate')?.value))].map((x, i) =>
                                                            <span key={i} className="fa fa-star" />
                                                        )}
                                                    </div>
                                                    <div className="text">
                                                        {item.value}
                                                    </div>
                                                    <div className="quote-icon flaticon-quote" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </SwiperSlide>
                            )
                        }

                    </Swiper>
                    <div className="swiper-nav">
                        <div
                            className="swiper-nav-icon"
                            // @ts-ignore
                            onClick={()=>swiperInstance.slidePrev(500)}
                        >
                            <span className="flaticon-left"></span>
                        </div>

                            <div className="swiper-nav-counter">
                                {swiperInstance && swiperInstance.slides.map( (slide ,index) =>(
                                    <span
                                        key={index }
                                        onClick={()=>swiperInstance.slideTo(index, 500)}
                                        className={activeSlide == index ? 'active' : ''}>
                                        0{index+1}
                                    </span>
                                ))}
                            </div>

                        <div
                            className="swiper-nav-icon"
                            // @ts-ignore
                            onClick={()=>swiperInstance.slideNext(500)}
                        >
                            <span className="flaticon-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}

