"use client"

import {useAppDispatch, useAppSelector} from "$/hooks";
import {setNavStatus} from "$/themeSlice";

const Sidebar = () => {
    const dispatch = useAppDispatch();
    const sliderStatus = useAppSelector((state) => state.themeSlice.navStatus);

    if( !sliderStatus ) return <></>;

    const navHandler = () => {
        // @ts-ignore
        dispatch(setNavStatus());
    }

    return(
        <div className="xs-sidebar-group info-group">
            <div className="xs-overlay xs-bg-black" >
                <div className="xs-sidebar-widget">
                    <div className="sidebar-widget-container">
                        <div className="widget-heading">
                            <a href="#" className="close-side-widget" onClick={navHandler}>
                                X
                            </a>
                        </div>
                        <div className="sidebar-textwidget">
                            <div className="sidebar-info-contents">
                                <div className="content-inner">
                                    <div className="logo">
                                        <a href="index.html">
                                            <img src="/images/logo.png" alt="" title="" />
                                        </a>
                                    </div>
                                    <div className="content-box">
                                        <h6>Services</h6>
                                        <ul className="sidebar-services-list">
                                            <li>
                                                <a href="#">Laptops &amp; Computers</a>
                                            </li>
                                            <li>
                                                <a href="#">Cameras &amp; Photography</a>
                                            </li>
                                            <li>
                                                <a href="#">Smart Phones &amp; Tablets</a>
                                            </li>
                                            <li>
                                                <a href="#">Video Games &amp; Consoles</a>
                                            </li>
                                            <li>
                                                <a href="#">TV &amp; Audio</a>
                                            </li>
                                            <li>
                                                <a href="#">LED Table</a>
                                            </li>
                                        </ul>
                                        <h6>Contact info</h6>
                                        <ul className="list-style-one">
                                            <li>
                                                <span className="icon flaticon-maps-and-flags" />
                                                <strong>Our office</strong>
                                                A-1, Envanto Headquarters, <br /> Melbourne, Australia.
                                            </li>
                                            <li>
                                                <span className="icon flaticon-call-1" />
                                                <strong>Phone</strong>
                                                <a href="tel:+00-999-999-9999">+(00) 999 999 9999</a>
                                                <br />
                                                <a href="tel:+000-000-0000">000 000 0000</a>
                                            </li>
                                            <li>
                                                <span className="icon flaticon-mail" />
                                                <strong>Email</strong>
                                                <a href="mailto:contact@bloxic.com">contact@Bloxic.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="xs-sidebar-closer" onClick={navHandler}></div>
            </div>
        </div>
    )
}


export default Sidebar;
