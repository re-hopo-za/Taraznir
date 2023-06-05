'use client'

import Header from "@/layouts/Header";
import { useState } from 'react';
import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import BreadCrumb from "@/layouts/BreadCrumb";
import {Swiper, SwiperSlide} from "swiper/react";
import SwiperCore ,{Pagination,Controller ,Thumbs } from 'swiper';
import 'swiper/css';
SwiperCore.use([Thumbs]);

type Params = {
    params : {
        slug:string
    }
}

export default function ProductPage({params :{slug}} : Params) {
    const [thumbsSwiper, setThumbsSwiper] = useState(null);
    const [activeItem ,setActiveItem] = useState(0);

    const activeChecker = ( index :number ,classList :string ,activeClass :string ) :string => {
        return activeItem === index ? `${classList} ${activeClass}` : classList
    }



    return (
        <div className="page-wrapper">
            <Header/>
            <BreadCrumb />


            <section className="shop-detail-section">
                <div className="auto-container">
                    <div className="upper-box">
                        <div className="row clearfix">
                            <div className="gallery-column col-lg-6 col-md-12 col-sm-12">
                                <div className="inner-column">
                                    <div className="carousel-outer">
                                        <Swiper
                                            className="content-carousel"
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
                                            <SwiperSlide className="swiper-slide">
                                                <figure className="image">
                                                    <a
                                                        href="/images/resource/products/35.png"
                                                        className="lightbox-image"
                                                    >
                                                        <img src="/images/resource/products/35.png" alt="" />
                                                    </a>
                                                </figure>
                                            </SwiperSlide>
                                            <SwiperSlide className="swiper-slide">
                                                <figure className="image">
                                                    <a
                                                        href="/images/resource/products/35.png"
                                                        className="lightbox-image"
                                                    >
                                                        <img src="/images/resource/products/35.png" alt="" />
                                                    </a>
                                                </figure>
                                            </SwiperSlide>
                                            <SwiperSlide className="swiper-slide">
                                                <figure className="image">
                                                    <a
                                                        href="/images/resource/products/35.png"
                                                        className="lightbox-image"
                                                    >
                                                        <img src="/images/resource/products/35.png" alt="" />
                                                    </a>
                                                </figure>
                                            </SwiperSlide>
                                            <SwiperSlide className="swiper-slide">
                                                <figure className="image">
                                                    <a
                                                        href="/images/resource/products/35.png"
                                                        className="lightbox-image"
                                                    >
                                                        <img src="/images/resource/products/35.png" alt="" />
                                                    </a>
                                                </figure>
                                            </SwiperSlide>
                                            <SwiperSlide className="swiper-slide">
                                                <figure className="image">
                                                    <a
                                                        href="/images/resource/products/35.png"
                                                        className="lightbox-image"
                                                    >
                                                        <img src="/images/resource/products/35.png" alt="" />
                                                    </a>
                                                </figure>
                                            </SwiperSlide>
                                        </Swiper>

                                        <Swiper
                                            className="thumbs-carousel"
                                            direction='vertical'
                                            slidesPerView="auto"
                                            spaceBetween={10}
                                            centeredSlides={false}
                                            loop={true}
                                            slideToClickedSlide={true}
                                            // @ts-ignore
                                            onSwiper={setThumbsSwiper}
                                            modules={[Controller]}

                                        >
                                            <SwiperSlide className="swiper-slide">
                                                <figure className="thumb">
                                                    <img src="/images/resource/products/36.png" alt="" />
                                                </figure>
                                            </SwiperSlide>
                                            <SwiperSlide className="swiper-slide">
                                                <figure className="thumb">
                                                    <img src="/images/resource/products/37.png" alt="" />
                                                </figure>
                                            </SwiperSlide>
                                            <SwiperSlide className="swiper-slide">
                                                <figure className="thumb">
                                                    <img src="/images/resource/products/38.png" alt="" />
                                                </figure>
                                            </SwiperSlide>
                                            <SwiperSlide className="swiper-slide">
                                                <figure className="thumb">
                                                    <img src="/images/resource/products/39.png" alt="" />
                                                </figure>
                                            </SwiperSlide>
                                        </Swiper>

                                    </div>
                                </div>
                            </div>
                            <div className="content-column col-lg-6 col-md-12 col-sm-12">
                                <div className="inner-column">
                                    <h3>Accesories Lather Shoes</h3>
                                    <div className="rating">
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="light fa fa-star" />
                                        <i>(4 customer review)</i>
                                    </div>
                                    <div className="price">
                                        <i>-34%</i>
                                        $16.00 <span>$32.00</span>
                                    </div>
                                    <div className="text">
                                        Rorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore.
                                    </div>
                                    <div className="d-flex flex-wrap">
                                        <div className="model">
                                            <span className="model-title">Model :</span>
                                        </div>
                                        <div className="select-size-box clearfix">
                                            <div className="select-box">
                                                <input
                                                    type="radio"
                                                    name="payment-group"
                                                    id="radio-one"
                                                />
                                                <label htmlFor="radio-one">tyk</label>
                                            </div>
                                            <div className="select-box">
                                                <input type="radio" name="payment-group" id="radio-two" />
                                                <label htmlFor="radio-two">ffd2</label>
                                            </div>
                                            <div className="select-box">
                                                <input type="radio" name="payment-group" id="radio-three" />
                                                <label htmlFor="radio-three">23tt</label>
                                            </div>
                                            <div className="select-box">
                                                <input type="radio" name="payment-group" id="radio-four" />
                                                <label htmlFor="radio-four">r454</label>
                                            </div>
                                            <div className="select-box">
                                                <input type="radio" name="payment-group" id="radio-five" />
                                                <label htmlFor="radio-five">45hy</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="categories">
                                        <span>Categories :</span> All, Featured, Medical, Covid-19 Mask
                                    </div>
                                    <div className="categories">
                                        <span>Tags :</span> Black, Brown, Red, Shoes, £0.00 - £150.00
                                    </div>
                                    <ul className="social-box">
                                        <li className="share">Share:</li>
                                        <li>
                                            <a
                                                href="https://www.facebook.com/"
                                                className="fa fa-facebook-f"
                                            />
                                        </li>
                                        <li>
                                            <a href="https://www.twitter.com/" className="fa fa-twitter" />
                                        </li>
                                        <li>
                                            <a href="https://dribbble.com/" className="fa fa-dribbble" />
                                        </li>
                                        <li>
                                            <a
                                                href="https://www.linkedin.com/"
                                                className="fa fa-linkedin"
                                            />
                                        </li>
                                    </ul>
                                    <div className="d-flex align-items-center flex-wrap">
                                        <div className="button-box">
                                            <a href="shop.html" className="theme-btn btn-style-one">
                                                Add to cart
                                            </a>
                                        </div>
                                        <div className="quantity-box">
                                            <div className="item-quantity">
                                                <div className="input-group bootstrap-touchspin">
                                                    <input
                                                        className="qty-spinner form-control"
                                                        type="text"
                                                        defaultValue={1}
                                                        name="quantity"
                                                        style={{ display: "block" }}
                                                    />
                                                    <span className="input-group-btn-vertical">
                                                        <button
                                                            className="btn btn-default bootstrap-touchspin-up"
                                                            type="button"
                                                        >
                                                          <i className="glyphicon glyphicon-chevron-up" />
                                                        </button>
                                                        <button
                                                            className="btn btn-default bootstrap-touchspin-down"
                                                            type="button"
                                                        >
                                                          <i className="glyphicon glyphicon-chevron-down" />
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="lower-box">

                        <div className="product-info-tabs">

                            <div className="prod-tabs tabs-box">
                                <ul className="tab-btns tab-buttons clearfix" dir="rtl">
                                    <li
                                        data-tab="#prod-details"
                                        className={activeChecker(0 , 'tab-btn', 'active-btn')}
                                        onClick={()=>setActiveItem(0)}
                                    >
                                        Product Details
                                    </li>

                                    <li
                                        data-tab="#prod-info"
                                        className={activeChecker(1 , 'tab-btn', 'active-btn')}
                                        onClick={()=>setActiveItem(1)}
                                    >
                                        additional information
                                    </li>
                                    <li
                                        data-tab="#prod-review"
                                        className={activeChecker(2 , 'tab-btn', 'active-btn')}
                                        onClick={()=>setActiveItem(2)}
                                    >
                                        Review (02)
                                    </li>
                                    <li
                                        data-tab="#prod-faq"
                                        className={activeChecker(3 , 'tab-btn', 'active-btn')}
                                        onClick={()=>setActiveItem(3)}
                                    >
                                        Faq
                                    </li>
                                </ul>

                                <div className="tabs-content">

                                    <div className={activeChecker(0 , 'tab', 'active-tab')} id="prod-details">
                                        <div className="content">
                                            <h3>Experience is over the world visit</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget
                                                viverra pretium, dolor tellus aliquet nunc vitae ultricies
                                                erat elit eu lacus. Vestibulum non justo consectetur, cursus
                                                ante, tincidunt sapien. Nulla quis diam sit amet turpis
                                                interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh
                                                egestas elementum. Mauris et bibendum dui. Aenean consequat
                                                pulvinar luctus
                                            </p>
                                            <h5>More Details</h5>
                                            <div className="row clearfix">
                                                <div className="col-lg-6 col-md-12 col-sm-12">
                                                    <ul className="list-one">
                                                        <li>
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry
                                                        </li>
                                                        <li>
                                                            Lorem Ipsum has been the ‘s standard dummy text. Lorem
                                                            Ipsumum is simply dummy text.
                                                        </li>
                                                        <li>type here your detail one by one li more add</li>
                                                        <li>
                                                            has been the industry’s standard dummy text ever since.
                                                            Lorem Ips
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div className="col-lg-6 col-md-12 col-sm-12">
                                                    <ul className="list-two">
                                                        <li>Lorem Ipsum generators on the tend to repeat.</li>
                                                        <li>If you are going to use a passage.</li>
                                                        <li>Lorem Ipsum generators on the tend to repeat.</li>
                                                        <li>Lorem Ipsum generators on the tend to repeat.</li>
                                                        <li>If you are going to use a passage.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div className={activeChecker(1 , 'tab', 'active-tab')} id="prod-info">
                                        <div className="content">
                                            <h3>Experience is over the world visit</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget
                                                viverra pretium, dolor tellus aliquet nunc vitae ultricies
                                                erat elit eu lacus. Vestibulum non justo consectetur, cursus
                                                ante, tincidunt sapien. Nulla quis diam sit amet turpis
                                                interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh
                                                egestas elementum. Mauris et bibendum dui. Aenean consequat
                                                pulvinar luctus
                                            </p>
                                        </div>
                                    </div>

                                    <div className={activeChecker(2 , 'tab', 'active-tab')} id="prod-review">
                                        <h2 className="title">2 Reviews For win Your Friends</h2>

                                        <div className="comments-area">

                                            <div className="comment-box">
                                                <div className="comment">
                                                    <div className="author-thumb">
                                                        <img src="/images/resource/author-1.jpg" alt="" />
                                                    </div>
                                                    <div className="comment-inner">
                                                        <div className="comment-info clearfix">
                                                            Steven Rich – March 17, 2022:
                                                        </div>
                                                        <div className="rating">
                                                            <span className="fa fa-star" />
                                                            <span className="fa fa-star" />
                                                            <span className="fa fa-star" />
                                                            <span className="fa fa-star" />
                                                            <span className="fa fa-star light" />
                                                        </div>
                                                        <div className="text">
                                                            How all this mistaken idea of denouncing pleasure and
                                                            praising pain was born and I will give you a complete
                                                            account of the system, and expound the actual teachings.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div className="comment-box reply-comment">
                                                <div className="comment">
                                                    <div className="author-thumb">
                                                        <img src="/images/resource/author-2.jpg" alt="" />
                                                    </div>
                                                    <div className="comment-inner">
                                                        <div className="comment-info clearfix">
                                                            William Cobus – April 21, 2022:
                                                        </div>
                                                        <div className="rating">
                                                            <span className="fa fa-star" />
                                                            <span className="fa fa-star" />
                                                            <span className="fa fa-star" />
                                                            <span className="fa fa-star" />
                                                            <span className="fa fa-star-half-empty" />
                                                        </div>
                                                        <div className="text">
                                                            There anyone who loves or pursues or desires to obtain
                                                            pain itself, because it is pain sed, because
                                                            occasionally circumstances occur some great pleasure.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div className="shop-comment-form">
                                            <h4>Add Your Comments</h4>
                                            <div className="rating-box">
                                                <div className="text"> Your Rating:</div>
                                                <div className="rating">
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                </div>
                                                <div className="rating">
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                </div>
                                                <div className="rating">
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                </div>
                                                <div className="rating">
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                </div>
                                                <div className="rating">
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                    <a href="#">
                                                        <span className="fa fa-star" />
                                                    </a>
                                                </div>
                                            </div>
                                            <form method="post" action="contact.html">
                                                <div className="row clearfix">
                                                    <div className="col-md-6 col-sm-6 col-xs-12 form-group">
                                                        <label>First Name *</label>
                                                        <input
                                                            type="text"
                                                            name="username"
                                                            placeholder=""

                                                        />
                                                    </div>
                                                    <div className="col-md-6 col-sm-6 col-xs-12 form-group">
                                                        <label>Last Name*</label>
                                                        <input
                                                            type="email"
                                                            name="email"
                                                            placeholder=""

                                                        />
                                                    </div>
                                                    <div className="col-md-12 col-sm-12 col-xs-12 form-group">
                                                        <label>Email*</label>
                                                        <input
                                                            type="text"
                                                            name="number"
                                                            placeholder=""

                                                        />
                                                    </div>
                                                    <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                        <label>Your Comments*</label>
                                                        <textarea
                                                            name="message"
                                                            placeholder=""
                                                            defaultValue={""}
                                                        />
                                                    </div>
                                                    <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                        <button className="theme-btn btn-style-four">
                                                            Submit now
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div className={activeChecker(3 , 'tab', 'active-tab')} id="prod-faq">
                                        <div className="content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget
                                                viverra pretium, dolor tellus aliquet nunc, vitae ultricies
                                                erat elit eu lacus. Vestibulum non justo consectetur, cursus
                                                ante, tincidunt sapien. Nulla quis diam sit amet turpis
                                                interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh
                                                egestas elementum. Mauris et bibendum dui. Aenean consequat
                                                pulvinar luctus. Suspendisse consectetur tristique tortor
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>


            <section className="products-section-six">
                <div className="auto-container">
                    <div className="sec-title">
                        <h4>
                            <span>Populer</span> Products For You !
                        </h4>
                    </div>
                    <div className="row clearfix">
                        <div className="shop-item-two col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/25.png" alt="" />
                                    </a>
                                    <div className="options-box">
                                        <ul className="option-list">
                                            <li>
                                                <a className="flaticon-resize" href="shop-detail.html" />
                                            </li>
                                            <li>
                                                <a className="flaticon-heart" href="shop-detail.html" />
                                            </li>
                                            <li>
                                                <a
                                                    className="flaticon-shopping-cart-2"
                                                    href="shop-detail.html"
                                                />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="content">
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="lower-box">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        <div className="select-amount clearfix">
                                            <div className="select-box">
                                                <input
                                                    type="radio"
                                                    name="payment-group"
                                                    id="radio-one"
                                                />
                                                <label htmlFor="radio-one">32</label>
                                            </div>
                                            <div className="select-box not-available">
                                                <label htmlFor="radio-two">34</label>
                                            </div>
                                            <div className="select-box">
                                                <input type="radio" name="payment-group" id="radio-three" />
                                                <label htmlFor="radio-three">36</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="shop-item-two col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/26.png" alt="" />
                                    </a>
                                    <div className="options-box">
                                        <ul className="option-list">
                                            <li>
                                                <a className="flaticon-resize" href="shop-detail.html" />
                                            </li>
                                            <li>
                                                <a className="flaticon-heart" href="shop-detail.html" />
                                            </li>
                                            <li>
                                                <a
                                                    className="flaticon-shopping-cart-2"
                                                    href="shop-detail.html"
                                                />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="content">
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="lower-box">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        <div className="select-amount clearfix">
                                            <div className="select-box">
                                                <input
                                                    type="radio"
                                                    name="payment-group"
                                                    id="radio-four"
                                                />
                                                <label htmlFor="radio-four">32</label>
                                            </div>
                                            <div className="select-box not-available">
                                                <label htmlFor="radio-five">34</label>
                                            </div>
                                            <div className="select-box">
                                                <input type="radio" name="payment-group" id="radio-six" />
                                                <label htmlFor="radio-six">36</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="shop-item-two col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/27.png" alt="" />
                                    </a>
                                    <div className="options-box">
                                        <ul className="option-list">
                                            <li>
                                                <a className="flaticon-resize" href="shop-detail.html" />
                                            </li>
                                            <li>
                                                <a className="flaticon-heart" href="shop-detail.html" />
                                            </li>
                                            <li>
                                                <a
                                                    className="flaticon-shopping-cart-2"
                                                    href="shop-detail.html"
                                                />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="content">
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="lower-box">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        <div className="select-amount clearfix">
                                            <div className="select-box">
                                                <input
                                                    type="radio"
                                                    name="payment-group"
                                                    id="radio-seven"
                                                />
                                                <label htmlFor="radio-seven">32</label>
                                            </div>
                                            <div className="select-box not-available">
                                                <label htmlFor="radio-eight">34</label>
                                            </div>
                                            <div className="select-box">
                                                <input type="radio" name="payment-group" id="radio-nine" />
                                                <label htmlFor="radio-nine">36</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="shop-item-two col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/28.png" alt="" />
                                    </a>
                                    <div className="options-box">
                                        <ul className="option-list">
                                            <li>
                                                <a className="flaticon-resize" href="shop-detail.html" />
                                            </li>
                                            <li>
                                                <a className="flaticon-heart" href="shop-detail.html" />
                                            </li>
                                            <li>
                                                <a
                                                    className="flaticon-shopping-cart-2"
                                                    href="shop-detail.html"
                                                />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="content">
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="lower-box">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        <div className="select-amount clearfix">
                                            <div className="select-box">
                                                <input
                                                    type="radio"
                                                    name="payment-group"
                                                    id="radio-ten"
                                                />
                                                <label htmlFor="radio-ten">32</label>
                                            </div>
                                            <div className="select-box">
                                                <input type="radio" name="payment-group" id="radio-eleven" />
                                                <label htmlFor="radio-eleven">34</label>
                                            </div>
                                            <div className="select-box">
                                                <input type="radio" name="payment-group" id="radio-twelve" />
                                                <label htmlFor="radio-twelve">36</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <Sidebar/>
            <Footer/>
        </div>
    )
}
