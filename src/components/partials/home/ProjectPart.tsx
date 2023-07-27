'use client'

import MiniSlider from "@/partials/home/MiniSlider";
import {useState} from "react";


export default function ProjectPart(){

    const [activeItem ,setActiveItem] = useState(0);

    const activeChecker = ( index :number ,classList :string ,activeClass :string ) :string => {
        return activeItem === index ? `${classList} ${activeClass}` : classList
    }

    return(
        <section className="services-section">
            <div className="auto-container">

                <div className="sec-title">
                    <h4>
                        <span>essential </span> services
                    </h4>
                </div>
                <div className="services-info-tabs">
                    <div className="services-tabs tabs-box">
                        <ul className="tab-btns tab-buttons clearfix">
                            <li
                                data-tab="#prod-furniture1"
                                className={activeChecker(0 , 'tab-btn', 'active-btn')}
                                onClick={()=>setActiveItem(0)}
                            >
                                Furniture Collection
                            </li>
                            <li
                                data-tab="#prod-room1"
                                className={activeChecker(1 , 'tab-btn', 'active-btn')}
                                onClick={()=>setActiveItem(1)}
                            >
                                Living Room Collection
                            </li>
                            <li
                                data-tab="#prod-interior1"
                                className={activeChecker(2 , 'tab-btn', 'active-btn')}
                                onClick={()=>setActiveItem(2)}
                            >
                                Interior Desiging
                            </li>
                        </ul>
                        <div className="tabs-content">
                            <div className={activeChecker(0 , 'tab', 'active-tab')} id="prod-furniture1">
                                <div className="row clearfix">
                                    <div className="service-block active col-lg-6 col-md-6 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="/images/resource/service-1.png" alt="" />
                                                </a>
                                            </div>
                                            <div className="lower-content">
                                                <h5>
                                                    <a href="shop-detail.html">Business Card Design -1</a>
                                                </h5>
                                                <div className="text">
                                                    We build and activate brands through cultural <br /> str
                                                    vision, and the power of emotion <br /> across every
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="service-block col-lg-6 col-md-6 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="/images/resource/service-2.png" alt="" />
                                                </a>
                                            </div>
                                            <div className="lower-content">
                                                <h5>
                                                    <a href="shop-detail.html">Banner Desgin</a>
                                                </h5>
                                                <div className="text">
                                                    We build and activate brands through cultural <br /> str
                                                    vision, and the power of emotion <br /> across every
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className={activeChecker(1 , 'tab', 'active-tab')} id="prod-room1">
                                <div className="row clearfix">
                                    <div className="service-block col-lg-6 col-md-6 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="/images/resource/service-1.png" alt="" />
                                                </a>
                                            </div>
                                            <div className="lower-content">
                                                <h5>
                                                    <a href="shop-detail.html">Business Card Design -2</a>
                                                </h5>
                                                <div className="text">
                                                    We build and activate brands through cultural <br /> str
                                                    vision, and the power of emotion <br /> across every
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="service-block active col-lg-6 col-md-6 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="/images/resource/service-2.png" alt="" />
                                                </a>
                                            </div>
                                            <div className="lower-content">
                                                <h5>
                                                    <a href="shop-detail.html">Banner Desgin</a>
                                                </h5>
                                                <div className="text">
                                                    We build and activate brands through cultural <br /> str
                                                    vision, and the power of emotion <br /> across every
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className={activeChecker(2 , 'tab', 'active-tab')} id="prod-interior1">
                                <div className="row clearfix">
                                    <div className="service-block active col-lg-6 col-md-6 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="/images/resource/service-1.png" alt="" />
                                                </a>
                                            </div>
                                            <div className="lower-content">
                                                <h5>
                                                    <a href="shop-detail.html">Business Card Design -3</a>
                                                </h5>
                                                <div className="text">
                                                    We build and activate brands through cultural <br /> str
                                                    vision, and the power of emotion <br /> across every
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="service-block col-lg-6 col-md-6 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href="shop-detail.html">
                                                    <img src="/images/resource/service-2.png" alt="" />
                                                </a>
                                            </div>
                                            <div className="lower-content">
                                                <h5>
                                                    <a href="shop-detail.html">Banner Desgin</a>
                                                </h5>
                                                <div className="text">
                                                    We build and activate brands through cultural <br /> str
                                                    vision, and the power of emotion <br /> across every
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <MiniSlider />
            </div>
        </section>


    )
}
