'use client'

import { Swiper, SwiperSlide } from 'swiper/react';

import 'swiper/css';
import 'swiper/css/autoplay';
import {Autoplay ,FreeMode ,} from "swiper";



export default function MiniSlider(){
    return(
        <div className="sponsors-box">
            <Swiper
                dir="ltr"
                autoplay={{
                    reverseDirection:true,
                    delay:2000,
                    pauseOnMouseEnter:true
                }}
                speed={1000}
                loop={true}
                freeMode={true}
                loopedSlides={140}
                slidesPerView={6}
                slidesPerGroup={1}
                spaceBetween={30}
                modules={[Autoplay,FreeMode]}
            >

                <SwiperSlide className="slide-item">
                    <figure className="image-box">
                        <a href="#">
                            <img src="images/clients/1.png" alt="" />
                        </a>
                    </figure>
                </SwiperSlide>
                <SwiperSlide className="slide-item">
                    <figure className="image-box">
                        <a href="#">
                            <img src="images/clients/1.png" alt="" />
                        </a>
                    </figure>
                </SwiperSlide>
                <SwiperSlide className="slide-item">
                    <figure className="image-box">
                        <a href="#">
                            <img src="images/clients/1.png" alt="" />
                        </a>
                    </figure>
                </SwiperSlide>
                <SwiperSlide className="slide-item">
                    <figure className="image-box">
                        <a href="#">
                            <img src="images/clients/1.png" alt="" />
                        </a>
                    </figure>
                </SwiperSlide>
                <SwiperSlide className="slide-item">
                    <figure className="image-box">
                        <a href="#">
                            <img src="images/clients/1.png" alt="" />
                        </a>
                    </figure>
                </SwiperSlide>
                <SwiperSlide className="slide-item">
                    <figure className="image-box">
                        <a href="#">
                            <img src="images/clients/1.png" alt="" />
                        </a>
                    </figure>
                </SwiperSlide>
                <SwiperSlide className="slide-item">
                    <figure className="image-box">
                        <a href="#">
                            <img src="images/clients/1.png" alt="" />
                        </a>
                    </figure>
                </SwiperSlide>
                <SwiperSlide className="slide-item">
                    <figure className="image-box">
                        <a href="#">
                            <img src="images/clients/1.png" alt="" />
                        </a>
                    </figure>
                </SwiperSlide>
                <SwiperSlide className="slide-item">
                    <figure className="image-box">
                        <a href="#">
                            <img src="images/clients/1.png" alt="" />
                        </a>
                    </figure>
                </SwiperSlide>

            </Swiper>
        </div>
    )
}
