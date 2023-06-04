"use client"
import {setNavStatus} from "$/themeSlice";
import { useAppDispatch } from "$/hooks";


const Header = () => {
    const dispatch = useAppDispatch();

    const navHandler = () => {
        // @ts-ignore
        dispatch(setNavStatus());
    }
    return(
        <header className="main-header header-style-two">
            <div className="header-lower">
                <div className="auto-container">
                    <div className="inner-container d-flex justify-content-between align-items-center">
                        <div className="logo-box d-flex align-items-center">
                            <div className="nav-toggle-btn a-nav-toggle navSidebar-button" onClick={navHandler}>
                                <span className="hamburger">
                                  <span className="top-bun" />
                                  <span className="meat" />
                                  <span className="bottom-bun" />
                                </span>
                            </div>
                            <div className="logo">
                                <a href="index.html">
                                    <img src="/images/logo.png" alt="" title="" />
                                </a>
                            </div>
                        </div>
                        <div className="middle-box">
                            <div className="upper-box d-flex justify-content-between align-items-center flex-wrap">
                                <ul className="info-list">
                                    <li>
                                        <span className="icon">
                                          <img src="/images/icons/location.png" alt="" />
                                        </span>
                                            Store Location
                                    </li>
                                    <li>
                                        <span className="icon">
                                          <img src="/images/icons/bus.png" alt="" />
                                        </span>
                                        Track Your Order
                                    </li>
                                    <li>
                                        <span className="icon">
                                          <img src="/images/icons/telephone.png" alt="" />
                                        </span>
                                        Call Us For Enquiry
                                    </li>
                                </ul>
                                <div className="upper-right">
                                    <div className="upper-column info-box">
                                        <div className="icon-box flaticon-gift-box" />
                                        <strong>Free Shipping</strong>
                                        Free shipping $100
                                    </div>
                                    <div className="upper-column info-box">
                                        <div className="icon-box flaticon-headphones" />
                                        <strong>24/7 Support</strong>
                                        Free shipping $100
                                    </div>
                                    <div className="upper-column info-box">
                                        <div className="icon-box flaticon-padlock-1" />
                                        <strong>payment Secure</strong>
                                        Free shipping $100
                                    </div>
                                </div>
                            </div>
                            <div className="nav-outer d-flex justify-content-between align-items-center flex-wrap">
                                <nav className="main-menu show navbar-expand-md">
                                    <div className="navbar-header">
                                        <button
                                            className="navbar-toggler"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#navbarSupportedContent"
                                            aria-controls="navbarSupportedContent"
                                            aria-expanded="false"
                                            aria-label="Toggle navigation"
                                        >
                                            <span className="icon-bar" />
                                            <span className="icon-bar" />
                                            <span className="icon-bar" />
                                        </button>
                                    </div>
                                    <div
                                        className="navbar-collapse collapse clearfix"
                                        id="navbarSupportedContent"
                                    >
                                        <ul className="navigation clearfix">
                                            <li className="dropdown">
                                                <a href="#">Home</a>
                                                <ul>
                                                    <li>
                                                        <a href="index.html">Homepage One</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-2.html">Homepage Two</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-3.html">Homepage Three</a>
                                                    </li>
                                                    <li className="dropdown">
                                                        <a href="#">Header Styles</a>
                                                        <ul>
                                                            <li>
                                                                <a href="index.html">Header Style One</a>
                                                            </li>
                                                            <li>
                                                                <a href="index-2.html">Header Style Two</a>
                                                            </li>
                                                            <li>
                                                                <a href="index-3.html">Header Style Three</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li className="dropdown">
                                                <a href="#">Shop</a>
                                                <ul>
                                                    <li>
                                                        <a href="shop.html">Our Products</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-detail.html">Product Single</a>
                                                    </li>
                                                    <li>
                                                        <a href="cart.html">Shoping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">CheckOut</a>
                                                    </li>
                                                    <li>
                                                        <a href="register.html">Register</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li className="dropdown">
                                                <a href="#">Blog</a>
                                                <ul>
                                                    <li>
                                                        <a href="blog.html">Our Blog</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-detail.html">Blog Single</a>
                                                    </li>
                                                    <li>
                                                        <a href="not-found.html">Not Found</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <div className="options-box d-flex align-items-center">
                                    <div className="search-box-two">
                                        <form method="post" action="contact.html">
                                            <div className="form-group">
                                                <input
                                                    type="search"
                                                    name="search-field"
                                                    defaultValue=""
                                                    placeholder="Search"
                                                />
                                                <button type="submit">
                                                    <span className="icon flaticon-search" />
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <a className="user-box flaticon-user-3" href="contact.html" />
                                    <div className="like-box">
                                        <a className="user-box flaticon-heart" href="contact.html" />
                                        <span className="total-like">0</span>
                                    </div>
                                    <div className="cart-box-two">
                                        <a className="flaticon-shopping-bag" href="shop.html" />
                                        <span className="total-like">0</span>
                                    </div>
                                    <div className="mobile-nav-toggler">
                                        <span className="icon flaticon-menu" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="button-box text-center">
                            <a href="shop.html" className="theme-btn btn-style-one">
                                Login / Sign Up <span className="icon flaticon-right-arrow" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div className="sticky-header">
                <div className="auto-container">
                    <div className="d-flex justify-content-between align-items-center">
                        <div className="logo">
                            <a href="index.html" title="">
                                <img src="/images/logo-small.png" alt="" title="" />
                            </a>
                        </div>
                        <div className="right-box">
                            <nav className="main-menu"></nav>
                            <div className="mobile-nav-toggler">
                                <span className="icon flaticon-menu" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="mobile-menu">
                <div className="menu-backdrop" />
                <div className="close-btn">
                    <span className="icon flaticon-multiply" />
                </div>
                <nav className="menu-box">
                    <div className="nav-logo">
                        <a href="index.html">
                            <img src="/images/mobile-logo.png" alt="" title="" />
                        </a>
                    </div>
                    {/* Search */}
                    <div className="search-box">
                        <form method="post" action="contact.html">
                            <div className="form-group">
                                <input
                                    type="search"
                                    name="search-field"
                                    defaultValue=""
                                    placeholder="SEARCH HERE"
                                />
                                <button type="submit">
                                    <span className="icon flaticon-search-1" />
                                </button>
                            </div>
                        </form>
                    </div>
                    <div className="menu-outer"></div>
                </nav>
            </div>
        </header>

    )
}


export default Header;
