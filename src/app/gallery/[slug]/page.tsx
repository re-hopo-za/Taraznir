'use client'


import Header from "@/layouts/Header";

import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import CategoryWidget from "@/widgets/CategoryWidget";
import BreadCrumb from "@/layouts/BreadCrumb";
import {Swiper, SwiperSlide} from "swiper/react";
import SwiperCore ,{Pagination,Controller ,Thumbs } from 'swiper';

import 'swiper/css';
import 'swiper/css/autoplay';
import 'swiper/css/keyboard';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import 'swiper/css/zoom';
import 'swiper/css/navigation';
import {useState} from "react";



SwiperCore.use([Thumbs]);

type Params = {
    params : {
        slug:string
    }
}






// export const metadata: Metadata = {
//     title: '...',
//     description: '...',
// };

export default function GalleryPage({params :{slug}} : Params) {


    const [thumbsSwiper, setThumbsSwiper] = useState(null);
    const [eventSwiper, setEventSwiper] = useState(null);
    const images :string[] = [
        "https://images.pexels.com/photos/1478685/pexels-photo-1478685.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.unsplash.com/photo-1676557059846-2dad064ae6e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
        "https://images.unsplash.com/photo-1676557060416-1418aefb165d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
        "https://images.unsplash.com/photo-1675685468877-8cda3a02c49f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
        "https://images.unsplash.com/photo-1677108581323-7050fbfd528f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
        "https://images.unsplash.com/photo-1442328166075-47fe7153c128?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
        "https://images.unsplash.com/photo-1676557060416-1418aefb165d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
        "https://images.unsplash.com/photo-1675685468877-8cda3a02c49f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
        "https://images.unsplash.com/photo-1677108581323-7050fbfd528f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
        "https://images.unsplash.com/photo-1442328166075-47fe7153c128?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
    ]



    return (
        <div className="page-wrapper">
            <Header/>
            <BreadCrumb />
            <div className="sidebar-page-container">
                <div className="auto-container" style={{maxWidth:"1500px"}}>
                    <div className="row clearfix">
                        <div className="content-side gallery-page col-xl-9 col-lg-8 col-md-12 col-sm-12 right-sidebar">

                            <div className="gallery">
                                <div className="content">
                                    <h3>نمایشگاه بین‌المللی 96</h3>
                                    <hr />
                                </div>
                                <div className="gallery-footer">
                                    <ul>
                                        <li>
                                            <span>likes</span>87
                                        </li>
                                        <li>
                                            <span>views</span>173
                                        </li>
                                    </ul>
                                    <div className="description">
                                        <span>every</span>
                                    </div>
                                </div>
                                <Swiper

                                    className="swiper-container gallery-slider"
                                    modules={[ Pagination ,Controller]}
                                    loop={true}
                                    slidesPerView={1}
                                    loopedSlides={6}
                                    freeMode={true}
                                    slidesPerGroup={1}
                                    noSwiping={false}
                                    noSwipingClass="swiper-slide"
                                    pagination={{
                                        el: ".swiper-pagination",
                                        clickable: true
                                    }}
                                    thumbs={{ swiper: thumbsSwiper }}

                                >

                                    {images && images.map( (image ,index) =>(
                                        <SwiperSlide
                                            key={index}
                                            className="swiper-slide">
                                            <img
                                                src={image}
                                                alt=""
                                            />
                                        </SwiperSlide>
                                    ))}




                                </Swiper>


                                <Swiper
                                    className="swiper-container gallery-thumbs"
                                    slidesPerView="auto"
                                    spaceBetween={10}
                                    centeredSlides={false}
                                    loop={true}
                                    slideToClickedSlide={true}
                                    // @ts-ignore
                                    onSwiper={setThumbsSwiper}
                                    modules={[Controller]}

                                >

                                    {images && images.map( (image ,index) =>(
                                        <SwiperSlide
                                            key={index}
                                            className="swiper-slide">
                                            <img
                                                src={image}
                                                alt=""
                                            />
                                        </SwiperSlide>
                                    ))}




                                    <div className="swiper-pagination" >
                                    </div>

                                </Swiper>
                            </div>



                        </div>
                        <div className="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12 left-sidebar">
                            <aside className="sidebar sticky-top">
                                <div className="sidebar-inner">

                                    <CategoryWidget/>

                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>


            <Sidebar/>
            <Footer/>
        </div>
    )
}

