"use client"

import Script from 'next/script'
import {setNavStatus} from "$/themeSlice";
import { useAppDispatch } from "$/hooks";
import Scrollbar from 'react-scrollbars-custom';
import Image from 'next/image'
import {menuCreator} from "&/Helpers";
import {ThemeType} from "^/ThemeType";



const Header = ({options}:{options:ThemeType}) => {
    const dispatch = useAppDispatch();

    const navHandler = () => {
        // @ts-ignore
        dispatch(setNavStatus());
    }


    return(
        <header className="main-header header-style-two">
            <Script src="static/app.js" strategy={"afterInteractive"} />
            <div className="header-lower">
                <div className="main-slider-two">
                    <div className="inner-container d-flex justify-content-between align-items-center" style={{gap:10}}>
                        <div className="logo-box d-flex align-items-center">
                            <div className="nav-toggle-btn a-nav-toggle navSidebar-button" onClick={navHandler}>
                                <span className="hamburger">
                                  <span className="top-bun" />
                                  <span className="meat" />
                                  <span className="bottom-bun" />
                                </span>
                            </div>
                            <div className="logo">
                                <a href="/">
                                    <Image
                                        src="/images/logos/taraznir-logo-0.5x.png"
                                        alt="taraznir logo"
                                        width="160"
                                        height="60"
                                    />
                                </a>
                            </div>
                        </div>
                        <div className="middle-box">
                            <div className="upper-box">
                                <div className="info-list">
                                    <div className="d-flex justify-content-between align-items-center flex-wrap">
                                        <div className="left-top-middle">
                                            <a className="user-box flaticon-user-3" href="/profile" />
                                            <div className="like-box">
                                                <a className="user-box flaticon-heart" href="/profile/fave" />
                                                <span className="total-like">0</span>
                                            </div>
                                            <div className="cart-box-two">
                                                <a className="flaticon-shopping-bag" href="/product" />
                                                <span className="total-like">0</span>
                                            </div>
                                        </div>
                                        <ul>
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
                                    </div>
                                </div>

                            </div>
                            <div className="nav-outer d-flex justify-content-between align-items-center flex-wrap">
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

                                    <div className="mobile-nav-toggler">
                                        <a className="user-box flaticon-user-3" href="/profile" />
                                        <div className="like-box">
                                            <a className="user-box flaticon-heart" href="/profile/fave" />
                                            <span className="total-like">0</span>
                                        </div>
                                        <div className="cart-box-two">
                                            <a className="flaticon-shopping-bag" href="/product" />
                                            <span className="total-like">0</span>
                                        </div>

                                        <span className="icon flaticon-menu" />
                                    </div>
                                </div>
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
                                        {menuCreator(options ,'header_menu' ,'navigation clearfix')}
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div className="auth-button-box text-center right-header">
                            <a href="shop.html" className="theme-btn btn-style-one">
                                <span className="icon flaticon-right-arrow" />
                                ورود \ ثبت‌ نام
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div className="sticky-header">
                <div className="auto-container">
                    <div className="d-flex justify-content-between align-items-center">
                        <div className="logo">
                            <a href="index.html">
                                <Image
                                    src="/images/logos/taraznir-logo-0.5x.png"
                                    alt="taraznir logo"
                                    width="160"
                                    height="60"
                                />
                            </a>
                        </div>
                        <div className="right-box">
                            <nav className="main-menu">  </nav>
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
                            <Image
                                src="/images/logos/taraznir-logo-0.5x.png"
                                alt="taraznir logo"
                                width="160"
                                height="60"
                            />
                        </a>
                    </div>
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
                        <div className="menu-outer" style={{height:'100%'}}>
                            <Scrollbar style={{ width:"100%", height:'70%'}}>
                            </Scrollbar>
                        </div>
                </nav>
            </div>
        </header>

    )
}





export default Header;
