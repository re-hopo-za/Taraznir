import Header from "@/layouts/Header";

import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import TagsWidget from "@/widgets/TagsWidget";
import CategoryWidget from "@/widgets/CategoryWidget";
import PostsWidget from "@/widgets/PostsWidget";
import ReviewWidget from "@/widgets/ReviewWidget";
import MasterWidget from "@/widgets/MasterWidget";
import SupportWidget from "@/widgets/SupportWidget";
import TutorialTabsPart from "@/partials/TutorialTabsPart";

export default function Tutorial() {

    return (
        <div className="page-wrapper">
            <Header/>

            <div className="sidebar-page-container">
                <div className="auto-container">
                    <div className="row clearfix">

                        <div className="sidebar-side left-sidebar col-lg-3 col-md-12 col-sm-12">
                            <aside className="sidebar sticky-top">

                                <TagsWidget />
                                <CategoryWidget />
                                <MasterWidget />
                                <SupportWidget />

                            </aside>
                        </div>

                        <div className="content-side middle-sidebar col-lg-6 col-md-12 col-sm-12">
                            <div className="sec-title" dir="rtl">
                                <h4>Learn IOS development</h4>
                            </div>
                            <div className="video-box">
                                <figure className="video-image">
                                    <img src="images/resource/video-image.jpg" alt="" />
                                </figure>
                                <a
                                    href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                    className="lightbox-image overlay-box"
                                >
                                    <span className="flaticon-media-play-symbol">
                                      <i className="ripple" />
                                    </span>
                                </a>
                            </div>

                            <div className="video-info-boxed">
                                <div className="clearfix">
                                    <div className="pull-right" dir="rtl">
                                        <h6>Learn IOS development, Website design, Freelancing</h6>
                                        <div className="author text-right" dir="rtl">
                                            <div className="user-image">
                                                <img src="images/resource/author-10.jpg" alt="" />
                                            </div>
                                            Kerry Oaky
                                        </div>
                                        <div className="follow" dir="ltr">
                                            <a href="#">+ Follow</a>
                                        </div>
                                    </div>
                                    <div className="pull-left">
                                        <ul className="social-box">
                                            <li className="share">Share now on</li>
                                            <li className="facebook">
                                                <a href="#" className="fa fa-facebook" />
                                            </li>
                                            <li className="google">
                                                <a href="#" className="fa fa-google" />
                                            </li>
                                            <li className="twitter">
                                                <a href="#" className="fa fa-twitter" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <TutorialTabsPart />
                        </div>


                        <div className="sidebar-side right-sidebar col-lg-3 col-md-12 col-sm-12">
                            <aside className="sidebar sticky-top">

                                <ReviewWidget />
                                <PostsWidget />

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
