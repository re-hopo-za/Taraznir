import Header from "@/layouts/Header";

import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import TabWidget from "@/widgets/TabWidget";
import SliderWidget from "@/widgets/SliderWidget";


export default function News() {

    return (

        <div className="page-wrapper" style={{backgroundColor:"#f2f6f8"}}>
            <Header/>

            <div className="sidebar-page-container">
                <div className="auto-container" style={{maxWidth:"1500px"}}>
                    <div className="row clearfix">

                        <div className="sidebar-side left-sidebar col-lg-3 col-md-12 col-sm-12">
                            <aside className="sidebar sticky-top">

                                <TabWidget />

                            </aside>
                        </div>


                        <div className="content-side middle-sidebar col-lg-6 col-md-12 col-sm-12">

                            <div className="opinion-post mt-40 sidebar-widget-two">
                                <div className="sidebar-title-two  slider-widget-title" dir="rtl">
                                    <h5>Opinion</h5>
                                </div>
                                <div className="opinion-post-item">
                                    <div className="opinion-post-thumb">
                                        <img src="/images/opinion-post-thumb.jpg" alt="" />
                                        <div className="circle-bar">
                                            <div className="first circle"><strong></strong></div>
                                        </div>
                                    </div>
                                    <div className="opinion-post-content"><h3 className="title"><a href="/post-details-two">Miami
                                        woman deliver her powerful winds kept help from nuture…</a></h3><p>The property, complete
                                        with 30-seat screening from room, a 100-seat amphitheater and a swimming pond Your email
                                        address will not be this published. Required…</p>
                                        <div className="meta-post-2-style">
                                            <div className="meta-post-categores"><a href="/post-details-two">TECHNOLOGY</a></div>
                                            <div className="meta-post-date"><span>April 26, 2020</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div className="sidebar-side right-sidebar col-lg-3 col-md-12 col-sm-12">
                            <aside className="sidebar sticky-top">
                                <SliderWidget />
                            </aside>
                        </div>

                    </div>

                    <div className="row clearfix">



                        <div className="col-lg-3 col-md-6">
                            <div className="post-news-item-2 mt-40">
                                <div className="post-news-thumb">
                                    <img src="/images/post-news-thumb-1.png" alt="" />
                                </div>
                                <div className="post-news-content">
                                    <h3 className="title">
                                        <a href="/post-details-one">
                                            Japan’s virus success puzzled the world luck running out?
                                        </a>
                                    </h3>
                                    <p>
                                        The property, complete with 30-seat screening from room, a 100-seat
                                        amphitheater and a swimming pond with sandy shower…
                                    </p>
                                    <div className="meta-post-2-style">
                                        <div className="meta-post-categores">
                                            <a href="/post-details-one">TECHNOLOGY</a>
                                        </div>
                                        <div className="meta-post-date">
                                            <span>April 26, 2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-6">
                            <div className="post_gallery_play d-flex post_gallery_play-2 mt-40">
                                <div className="bg-image" style={{backgroundImage:"url(/images/gallery-post-2.jpg)"}}></div>
                                <div className="post__gallery_play_content">
                                    <h2 className="title">
                                        <a tabIndex={0} href="/post-details-one">
                                            Japan’s virus success has puzzled the world. Is its luck running
                                            out?
                                        </a>
                                    </h2>
                                    <p>
                                        The property, complete with a 30-seat screening room, a 100-seat
                                        amphitheater and a swimming pond with sandy beach and outdoor shower…
                                    </p>
                                    <div className="post-meta">
                                        <div className="meta-categories">
                                            <a tabIndex={0} href="/post-details-one">
                                                TECHNOLOGY
                                            </a>
                                        </div>
                                        <div className="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                </div>
                                <div className="post_play_btn">
                                    <a className="video-popup" href="#" tabIndex={0}>
                                        <i className="fas fa-play"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-3 col-md-6">
                            <div className="post-news-item-2 mt-40">
                                <div className="post-news-thumb">
                                    <img src="/images/post-news-thumb-1.png" alt="" />
                                </div>
                                <div className="post-news-content">
                                    <h3 className="title">
                                        <a href="/post-details-one">
                                            Japan’s virus success puzzled the world luck running out?
                                        </a>
                                    </h3>
                                    <p>
                                        The property, complete with 30-seat screening from room, a 100-seat
                                        amphitheater and a swimming pond with sandy shower…
                                    </p>
                                    <div className="meta-post-2-style">
                                        <div className="meta-post-categores">
                                            <a href="/post-details-one">TECHNOLOGY</a>
                                        </div>
                                        <div className="meta-post-date">
                                            <span>April 26, 2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                </div>
            </div>

            <Sidebar/>
            <Footer/>
        </div>




    )
}
