'use client'
import {useState} from "react";


export default function TabWidget(){

    const [thumbsSwiper, setThumbsSwiper] = useState(null);
    const [activeItem ,setActiveItem] = useState(0);

    const activeChecker = ( index :number ,classList :string ,activeClass :string ) :string => {
        return activeItem === index ? `${classList} ${activeClass}` : classList
    }



    return(
        <div className="tab-widget-section most-view-box post-widget ">
            <div className="product-info-tabs">
                <div className="sidebar-title-two  slider-widget-title" dir="rtl">
                    <h5>Category</h5>
                </div>
                <div className="prod-tabs tabs-box ">
                    <ul className="tab-btns tab-buttons" dir="rtl">
                        <li
                            data-tab="#prod-details"
                            className={activeChecker(0 , 'tab-btn', 'active-btn')}
                            onClick={()=>setActiveItem(0)}
                        >
                            TRENDY
                        </li>

                        <li
                            data-tab="#prod-info"
                            className={activeChecker(1 , 'tab-btn', 'active-btn')}
                            onClick={()=>setActiveItem(1)}
                        >
                            LATEST
                        </li>
                        <li
                            data-tab="#prod-review"
                            className={activeChecker(2 , 'tab-btn', 'active-btn')}
                            onClick={()=>setActiveItem(2)}
                        >
                            POPULAR
                        </li>
                    </ul>

                    <div className="tabs-content">

                        <div className={activeChecker(0 , 'tab', 'active-tab')} id="prod-details">
                            <div className="post">
                                <div className="thumb">
                                    <div className="post-number">01</div>
                                    <a href="news-detail.html">
                                        <img src="/images/resource/post-thumb-1.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="category">Sports</div>
                                <h6>
                                    <a href="news-detail.html">
                                        Budget Issues Force The Our To Be
                                    </a>
                                </h6>
                                <div className="meta-post-2-style">
                                    <div className="meta-post-date"><span>April 26, 2020</span></div>
                                </div>
                            </div>

                        </div>

                        <div className={activeChecker(1 , 'tab', 'active-tab')} id="prod-info">
                            <div className="post">
                                <div className="thumb">
                                    <div className="post-number">01</div>
                                    <a href="news-detail.html">
                                        <img src="/images/resource/post-thumb-1.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="category">Sports</div>
                                <h6>
                                    <a href="news-detail.html">
                                        Budget Issues Force The Our To Be
                                    </a>
                                </h6>
                                <div className="meta-post-2-style">
                                    <div className="meta-post-date"><span>April 26, 2020</span></div>
                                </div>
                            </div>
                            <div className="post">
                                <div className="thumb">
                                    <div className="post-number">01</div>
                                    <a href="news-detail.html">
                                        <img src="/images/resource/post-thumb-1.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="category">Sports</div>
                                <h6>
                                    <a href="news-detail.html">
                                        Budget Issues Force The Our To Be
                                    </a>
                                </h6>
                                <div className="meta-post-2-style">
                                    <div className="meta-post-date"><span>April 26, 2020</span></div>
                                </div>
                            </div>
                            <div className="post">
                                <div className="thumb">
                                    <div className="post-number">01</div>
                                    <a href="news-detail.html">
                                        <img src="/images/resource/post-thumb-1.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="category">Sports</div>
                                <h6>
                                    <a href="news-detail.html">
                                        Budget Issues Force The Our To Be
                                    </a>
                                </h6>
                                <div className="meta-post-2-style">
                                    <div className="meta-post-date"><span>April 26, 2020</span></div>
                                </div>
                            </div>
                        </div>

                        <div className={activeChecker(2 , 'tab', 'active-tab')} id="prod-review">
                            <div className="post">
                                <div className="thumb">
                                    <div className="post-number">01</div>
                                    <a href="news-detail.html">
                                        <img src="/images/resource/post-thumb-1.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="category">Sports</div>
                                <h6>
                                    <a href="news-detail.html">
                                        Budget Issues Force The Our To Be
                                    </a>
                                </h6>
                                <div className="meta-post-2-style">
                                    <div className="meta-post-date"><span>April 26, 2020</span></div>
                                </div>
                            </div>
                            <div className="post">
                                <div className="thumb">
                                    <div className="post-number">01</div>
                                    <a href="news-detail.html">
                                        <img src="/images/resource/post-thumb-1.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="category">Sports</div>
                                <h6>
                                    <a href="news-detail.html">
                                        Budget Issues Force The Our To Be
                                    </a>
                                </h6>
                                <div className="meta-post-2-style">
                                    <div className="meta-post-date"><span>April 26, 2020</span></div>
                                </div>
                            </div>
                            <div className="post">
                                <div className="thumb">
                                    <div className="post-number">01</div>
                                    <a href="news-detail.html">
                                        <img src="/images/resource/post-thumb-1.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="category">Sports</div>
                                <h6>
                                    <a href="news-detail.html">
                                        Budget Issues Force The Our To Be
                                    </a>
                                </h6>
                                <div className="meta-post-2-style">
                                    <div className="meta-post-date"><span>April 26, 2020</span></div>
                                </div>
                            </div>
                            <div className="post">
                                <div className="thumb">
                                    <div className="post-number">01</div>
                                    <a href="news-detail.html">
                                        <img src="/images/resource/post-thumb-1.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="category">Sports</div>
                                <h6>
                                    <a href="news-detail.html">
                                        Budget Issues Force The Our To Be
                                    </a>
                                </h6>
                                <div className="meta-post-2-style">
                                    <div className="meta-post-date"><span>April 26, 2020</span></div>
                                </div>
                            </div><div className="post">
                            <div className="thumb">
                                <div className="post-number">01</div>
                                <a href="news-detail.html">
                                    <img src="/images/resource/post-thumb-1.jpg" alt="" />
                                </a>
                            </div>
                            <div className="category">Sports</div>
                            <h6>
                                <a href="news-detail.html">
                                    Budget Issues Force The Our To Be
                                </a>
                            </h6>
                            <div className="meta-post-2-style">
                                <div className="meta-post-date"><span>April 26, 2020</span></div>
                            </div>
                        </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>


    )
}
