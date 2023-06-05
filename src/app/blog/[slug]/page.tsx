import Header from "@/layouts/Header";

import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import TagsWidget from "@/widgets/TagsWidget";
import CategoryWidget from "@/widgets/CategoryWidget";
import NewsWidget from "@/widgets/NewsWidget";
import PostsWidget from "@/widgets/PostsWidget";
import FollowUsWidget from "@/widgets/FollowUsWidget";
import SearchWidget from "@/widgets/SearchWidget";
import BreadCrumb from "@/layouts/BreadCrumb";
import AuthorPart from "@/partials/AuthorPart";
import CommentFormPart from "@/partials/CommentFormPart";
import CommentPart from "@/partials/CommentPart";
import MorePostPart from "@/partials/MorePostPart";


type Params = {
    params : {
        slug:string
    }
}

export default function BlogPage({params :{slug}} : Params) {

    return (
        <div className="page-wrapper">
            <Header/>
            <BreadCrumb />
            <div className="sidebar-page-container">
                <div className="auto-container">
                    <div className="row clearfix">
                        <div className="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 right-sidebar">


                            <div className="blog-detail">
                                <div className="inner-box">
                                    <div className="slide">
                                        <div className="image">
                                            <img src="/images/resource/news-10.jpg" alt="" />
                                            <div className="post-date">
                                                24 <br /> Feb
                                            </div>
                                        </div>
                                    </div>


                                    <div className="lower-content">
                                        <div className="tags">
                                            <span># Tags</span>
                                            <a href="#">Links</a>
                                            <a href="#">Brave</a>
                                        </div>
                                        <h3 dir="rtl">
                                            Inbound strategies that delight customers ensure cust satisfaction and
                                            provide customer support.
                                        </h3>
                                        <ul className="post-meta d-flex align-items-center flex-wrap" dir="rtl">
                                            <li dir="rtl">
                                                <span className="author">
                                                    <img src="/images/resource/author-4.jpg" alt="" />
                                                </span>
                                                <span>Alaxandar / </span>
                                                <span dir="rtl">4 year</span>
                                            </li>
                                            <li>
                                                <span className="icon flaticon-bubble-chat" />3
                                            </li>
                                            <li>
                                                <span className="icon flaticon-clock" />3 min Read
                                            </li>
                                        </ul>
                                        <div className="blog-content">
                                            <p>
                                                We have covered many special events such as fireworks, fairs, parades,
                                                races, walks, awards ceremonies, fashion shows, sporting events, and
                                                even a memorial service.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                                vulputate vestibulum rhoncus, dolor eget viverra pretium, dolor tellus
                                                aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo
                                                fun consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet
                                                turpis interd enim. Vivamus fauc ex sed nibh egestas elementum. Mauris
                                                et bibendum
                                            </p>
                                            <h4>Experience is over the world visit</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                                vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium,
                                                dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus.
                                                Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla
                                                quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus
                                                faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean
                                                consequat pulvinar luctus
                                            </p>
                                            <h4>Let our investment management team</h4>
                                            <p>
                                                We have covered many special events such as fireworks, fairs, parades,
                                                races, walks, awards ceremonies, tsto experience the healing warmth of
                                                the ever-present sunshine,” says Ian Kerr, managing director. The
                                                white-sand beaches and tropical foliage in the heart of Negril is
                                                designed to provide a truly serene, intimate, and restorative getaway.
                                                fashion shows, sport events, and even a memorial service.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                                vulputate vestibulum Phasellus rho cus, dolor eget viverra pretium,
                                                dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus.
                                                Vestibulum
                                            </p>
                                        </div>


                                        <div className="post-share-options">
                                            <div className="post-share-inner clearfix">
                                                <div className="tags-box" dir="rtl">
                                                    <span className="tags">Tags:</span>
                                                    <a href="#">Business</a> <a href="#">Design </a>
                                                    <a href="#">apps</a> <a href="#">data</a>
                                                </div>
                                                <ul className="social-box" dir="rtl">
                                                    <span className="share">Share :</span>
                                                    <li>
                                                        <a className="fa fa-facebook" href="#">
                                                            <span className="" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a className="fa fa-twitter" href="#" />
                                                    </li>
                                                    <li>
                                                        <a className="fa fa-linkedin" href="#" />
                                                    </li>
                                                    <li>
                                                        <a className="fa fa-pinterest-p" href="#" />
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <AuthorPart />
                                        <MorePostPart />
                                        <CommentPart />
                                        <CommentFormPart />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div className="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12 left-sidebar">
                            <aside className="sidebar sticky-top">
                                <div className="sidebar-inner">

                                    <SearchWidget/>
                                    <FollowUsWidget/>
                                    <PostsWidget/>
                                    <NewsWidget/>
                                    <CategoryWidget/>
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
