import Header from "@/layouts/Header";

import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import TagsWidget from "@/widgets/TagsWidget";
import CategoryWidget from "@/widgets/CategoryWidget";
import NewsWidget from "@/widgets/NewsWidget";
import AdsWidget from "@/widgets/AdsWidget";
import PostsWidget from "@/widgets/PostsWidget";
import FollowUsWidget from "@/widgets/FollowUsWidget";
import SearchWidget from "@/widgets/SearchWidget";
import Pagination from "@/layouts/Pagination";
import BreadCrumb from "@/layouts/BreadCrumb";
import ProductMenuWidget from "@/widgets/ProductMenuWidget";


export default function Product() {

    return (
        <div className="page-wrapper">
            <Header/>
            <BreadCrumb />
            <div className="sidebar-page-container">
                <div className="auto-container" style={{maxWidth:"1400px"}}>
                    <div className="row clearfix">
                        <div className="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 right-sidebar">

                            <div className="filter-box">
                                <div className="d-flex justify-content-between align-items-center flex-wrap">

                                    <div className="left-box d-flex align-items-center">
                                        <div className="results">Showing 1–12 of 54 results</div>
                                    </div>

                                    <div className="right-box d-flex">
                                        <div className="form-group">
                                            <select name="currency" className="custom-select-box">
                                                <option>Recently Added</option>
                                                <option>Added 01</option>
                                                <option>Added 02</option>
                                                <option>Added 03</option>
                                                <option>Added 04</option>
                                            </select>
                                        </div>
                                        <ul className="pages-list">
                                            <li>
                                                <a className="flaticon-list" href="#" />
                                            </li>
                                            <li>
                                                <a className="flaticon-menu-2" href="#" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div className="shops-outer">
                                <div className="row clearfix">
                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/1.png" alt="" />
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

                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/2.png" alt="" />
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

                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/3.png" alt="" />
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
                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/1.png" alt="" />
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
                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/2.png" alt="" />
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

                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/3.png" alt="" />
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
                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/1.png" alt="" />
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
                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/2.png" alt="" />
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
                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/3.png" alt="" />
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
                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/1.png" alt="" />
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
                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/2.png" alt="" />
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
                                    <div className="shop-item col-lg-4 col-md-4 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="images/resource/products/3.png" alt="" />
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
                                <Pagination />
                            </div>
                        </div>
                        <div className="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12 left-sidebar">
                            <aside className="sidebar sticky-top">
                                <div className="sidebar-inner">
                                    <ProductMenuWidget/>
                                    <SearchWidget/>
                                    <AdsWidget/>
                                    <TagsWidget/>
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
