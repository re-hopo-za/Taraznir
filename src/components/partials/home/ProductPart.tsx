'use client'

// @ts-ignore
import mixitup from 'mixitup';
import {useEffect} from "react";

export default function ProductMixItUp(){


    useEffect(function mount(){
        mixitup('.filter-list');
        return function unMount() {
            //
        };
    },[]);



    return(
        <section className="products-section-three">
            <div className="side-title">New Arrival</div>
            <div className="auto-container">
                <div className="sec-title">
                    <h4>
                        <span>Products </span> your choich !
                    </h4>
                </div>
                <div className="mixitup-gallery">
                    <div className="filters">
                        <ul className="filter-tabs">
                            <li className="filter mixitup-control-active" data-role="button" data-filter="all">
                                Trending
                            </li>
                            <li className="filter" data-role="button" data-filter=".bestseller">
                                Best Seller
                            </li>
                            <li className="filter" data-role="button" data-filter=".music">
                                music
                            </li>
                            <li className="filter" data-role="button" data-filter=".photography">
                                photography
                            </li>
                            <li className="filter" data-role="button" data-filter=".sports">
                                sports
                            </li>
                        </ul>
                    </div>
                    <div className="filter-list row clearfix">
                        <div className="shop-item mix music photography col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/17.png" alt="" />
                                    </a>
                                    <span className="tag flaticon-heart" />
                                    <div className="cart-box text-center">
                                        <a className="cart" href="#">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                                <div className="lower-content">
                                    <div className="rating">
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="light fa fa-star" />
                                    </div>
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="d-flex justify-content-between align-items-center">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        {/* Quantity Box */}
                                        <div className="quantity-box">
                                            <div className="item-quantity">
                                                <input
                                                    className="qty-spinner"
                                                    type="text"
                                                    defaultValue={1}
                                                    name="quantity"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="shop-item mix sports col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/18.png" alt="" />
                                    </a>
                                    <span className="tag flaticon-heart" />
                                    <div className="cart-box text-center">
                                        <a className="cart" href="#">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                                <div className="lower-content">
                                    <div className="rating">
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="light fa fa-star" />
                                    </div>
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="d-flex justify-content-between align-items-center">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
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
                                                        <button className="btn btn-default bootstrap-touchspin-up" type="button">
                                                           <i className="glyphicon glyphicon-chevron-up" />
                                                        </button>
                                                        <button className="btn btn-default bootstrap-touchspin-down" type="button">
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
                        <div className="shop-item mix photography bestseller col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/19.png" alt="" />
                                    </a>
                                    <span className="tag flaticon-heart" />
                                    <div className="cart-box text-center">
                                        <a className="cart" href="#">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                                <div className="lower-content">
                                    <div className="rating">
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="light fa fa-star" />
                                    </div>
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="d-flex justify-content-between align-items-center">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        {/* Quantity Box */}
                                        <div className="quantity-box">
                                            <div className="item-quantity">
                                                <input
                                                    className="qty-spinner"
                                                    type="text"
                                                    defaultValue={1}
                                                    name="quantity"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="shop-item mix music col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/20.png" alt="" />
                                    </a>
                                    <span className="tag flaticon-heart" />
                                    <div className="cart-box text-center">
                                        <a className="cart" href="#">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                                <div className="lower-content">
                                    <div className="rating">
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="light fa fa-star" />
                                    </div>
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="d-flex justify-content-between align-items-center">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        {/* Quantity Box */}
                                        <div className="quantity-box">
                                            <div className="item-quantity">
                                                <input
                                                    className="qty-spinner"
                                                    type="text"
                                                    defaultValue={1}
                                                    name="quantity"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="shop-item mix sports bestseller col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/21.png" alt="" />
                                    </a>
                                    <span className="tag flaticon-heart" />
                                    <div className="cart-box text-center">
                                        <a className="cart" href="#">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                                <div className="lower-content">
                                    <div className="rating">
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="light fa fa-star" />
                                    </div>
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="d-flex justify-content-between align-items-center">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        {/* Quantity Box */}
                                        <div className="quantity-box">
                                            <div className="item-quantity">
                                                <input
                                                    className="qty-spinner"
                                                    type="text"
                                                    defaultValue={1}
                                                    name="quantity"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="shop-item mix music photography col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/22.png" alt="" />
                                    </a>
                                    <span className="tag flaticon-heart" />
                                    <div className="cart-box text-center">
                                        <a className="cart" href="#">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                                <div className="lower-content">
                                    <div className="rating">
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="light fa fa-star" />
                                    </div>
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="d-flex justify-content-between align-items-center">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        {/* Quantity Box */}
                                        <div className="quantity-box">
                                            <div className="item-quantity">
                                                <input
                                                    className="qty-spinner"
                                                    type="text"
                                                    defaultValue={1}
                                                    name="quantity"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="shop-item mix sports bestseller col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/23.png" alt="" />
                                    </a>
                                    <span className="tag flaticon-heart" />
                                    <div className="cart-box text-center">
                                        <a className="cart" href="#">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                                <div className="lower-content">
                                    <div className="rating">
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="light fa fa-star" />
                                    </div>
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="d-flex justify-content-between align-items-center">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        {/* Quantity Box */}
                                        <div className="quantity-box">
                                            <div className="item-quantity">
                                                <input
                                                    className="qty-spinner"
                                                    type="text"
                                                    defaultValue={1}
                                                    name="quantity"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="shop-item mix music photography col-lg-3 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="shop-detail.html">
                                        <img src="/images/resource/products/24.png" alt="" />
                                    </a>
                                    <span className="tag flaticon-heart" />
                                    <div className="cart-box text-center">
                                        <a className="cart" href="#">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                                <div className="lower-content">
                                    <div className="rating">
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="fa fa-star" />
                                        <span className="light fa fa-star" />
                                    </div>
                                    <h6>
                                        <a href="shop-detail.html">
                                            masks 95 percent 0.3-μm <br /> particles
                                        </a>
                                    </h6>
                                    <div className="d-flex justify-content-between align-items-center">
                                        <div className="price">
                                            <span>$239.52</span> $362.00
                                        </div>
                                        {/* Quantity Box */}
                                        <div className="quantity-box">
                                            <div className="item-quantity">
                                                <input
                                                    className="qty-spinner"
                                                    type="text"
                                                    defaultValue={1}
                                                    name="quantity"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    )
}


