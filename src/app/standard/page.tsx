import Header from "@/layouts/Header";

import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import CategoryWidget from "@/widgets/CategoryWidget";
import Pagination from "@/layouts/Pagination";
import BreadCrumb from "@/layouts/BreadCrumb";


export default function Service() {

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

                                    <section className="featured-section-two col-lg-4 col-md-4 col-sm-12">
                                        <div className="auto-container">
                                            <div className="inner-container">
                                                <div className="clearfix">

                                                    <div className="feature-block-two ">
                                                        <div className="inner-box d-flex flex-wrap">
                                                            <ul className="options">
                                                                <li>
                                                                    <a href="shop-detail.html" className="flaticon-resize" />
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="shop-detail.html"
                                                                        className="flaticon-shopping-cart-2"
                                                                    />
                                                                </li>
                                                                <li>
                                                                    <a href="shop-detail.html" className="flaticon-heart" />
                                                                </li>
                                                            </ul>
                                                            <div className="content" dir="rtl">
                                                                <div className="off">Get 30% off</div>
                                                                <h6>
                                                                    <a href="shop-detail.html">Nuts &amp; Fresh Milk</a>
                                                                </h6>
                                                                <div className="price">
                                                                    Starting <span>560.99</span>
                                                                </div>
                                                            </div>
                                                            <div className="image">
                                                                <div className="circle-layer" />
                                                                <img src="images/resource/chair-1.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section className="featured-section-two col-lg-4 col-md-4 col-sm-12">
                                        <div className="auto-container">
                                            <div className="inner-container">
                                                <div className="clearfix">

                                                    <div className="feature-block-two ">
                                                        <div className="inner-box d-flex flex-wrap">
                                                            <ul className="options">
                                                                <li>
                                                                    <a href="shop-detail.html" className="flaticon-resize" />
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="shop-detail.html"
                                                                        className="flaticon-shopping-cart-2"
                                                                    />
                                                                </li>
                                                                <li>
                                                                    <a href="shop-detail.html" className="flaticon-heart" />
                                                                </li>
                                                            </ul>
                                                            <div className="content" dir="rtl">
                                                                <div className="off">Get 30% off</div>
                                                                <h6>
                                                                    <a href="shop-detail.html">Nuts &amp; Fresh Milk</a>
                                                                </h6>
                                                                <div className="price">
                                                                    Starting <span>560.99</span>
                                                                </div>
                                                            </div>
                                                            <div className="image">
                                                                <div className="circle-layer" />
                                                                <img src="images/resource/chair-1.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section className="featured-section-two col-lg-4 col-md-4 col-sm-12">
                                        <div className="auto-container">
                                            <div className="inner-container">
                                                <div className="clearfix">

                                                    <div className="feature-block-two ">
                                                        <div className="inner-box d-flex flex-wrap">
                                                            <ul className="options">
                                                                <li>
                                                                    <a href="shop-detail.html" className="flaticon-resize" />
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="shop-detail.html"
                                                                        className="flaticon-shopping-cart-2"
                                                                    />
                                                                </li>
                                                                <li>
                                                                    <a href="shop-detail.html" className="flaticon-heart" />
                                                                </li>
                                                            </ul>
                                                            <div className="content" dir="rtl">
                                                                <div className="off">Get 30% off</div>
                                                                <h6>
                                                                    <a href="shop-detail.html">Nuts &amp; Fresh Milk</a>
                                                                </h6>
                                                                <div className="price">
                                                                    Starting <span>560.99</span>
                                                                </div>
                                                            </div>
                                                            <div className="image">
                                                                <div className="circle-layer" />
                                                                <img src="images/resource/chair-1.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section className="featured-section-two col-lg-4 col-md-4 col-sm-12">
                                        <div className="auto-container">
                                            <div className="inner-container">
                                                <div className="clearfix">

                                                    <div className="feature-block-two ">
                                                        <div className="inner-box d-flex flex-wrap">
                                                            <ul className="options">
                                                                <li>
                                                                    <a href="shop-detail.html" className="flaticon-resize" />
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="shop-detail.html"
                                                                        className="flaticon-shopping-cart-2"
                                                                    />
                                                                </li>
                                                                <li>
                                                                    <a href="shop-detail.html" className="flaticon-heart" />
                                                                </li>
                                                            </ul>
                                                            <div className="content" dir="rtl">
                                                                <div className="off">Get 30% off</div>
                                                                <h6>
                                                                    <a href="shop-detail.html">Nuts &amp; Fresh Milk</a>
                                                                </h6>
                                                                <div className="price">
                                                                    Starting <span>560.99</span>
                                                                </div>
                                                            </div>
                                                            <div className="image">
                                                                <div className="circle-layer" />
                                                                <img src="images/resource/chair-1.png" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <Pagination />
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
