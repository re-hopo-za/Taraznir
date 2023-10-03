'use client'

import { Swiper, SwiperSlide } from 'swiper/react';

import 'swiper/css';
import 'swiper/css/autoplay';
import {Navigation, Pagination, Scrollbar, A11y} from "swiper/modules";



export default function MiniSlider({items ,route}:{items:any ,route:string}){
    return(
        <div className="sponsors-box">
            <Swiper
                autoplay={{
                    reverseDirection:true,
                    delay:2000,
                    pauseOnMouseEnter:true
                }}
                modules={[Navigation, Pagination, Scrollbar, A11y]}
                spaceBetween={50}
                slidesPerView={6}
                navigation={false}
                pagination={false}
                scrollbar={false}
            >
                {
                    items && items.map((item :any ,k :number ) =>
                        <SwiperSlide key={k} className="slide-item" style={{width: 140, height: 105}}>
                            <figure className="image-box">
                                <a href={`/${route}/${item.slug}`}>
                                    <img src={item.images?.thumbnail} alt={item.title} width={140} height={105}/>
                                </a>
                            </figure>
                        </SwiperSlide>
                    )
                }
            </Swiper>
        </div>
    )
}
