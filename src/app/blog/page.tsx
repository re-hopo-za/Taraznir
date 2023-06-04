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
import GalleryWidget from "@/widgets/GalleryWidget";
import AuthorPart from "@/partials/AuthorPart";


export default function Home() {

    return (
        <div className="page-wrapper">
            <Header/>
            <BreadCrumb />
            <div className="sidebar-page-container">
                <div className="auto-container">
                    <div className="row clearfix">
                        <div className="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 right-sidebar">

                            <div className="news-block-three">
                                <div className="inner-box">
                                    <div className="image">
                                        <a href="blog-detail.html">
                                            <img src="images/resource/news-6.jpg" alt="" />
                                        </a>
                                        <div className="post-date">
                                            24 <br/> Feb
                                        </div>
                                    </div>
                                    <div className="lower-content">
                                        <div className="tags">
                                            <span># Tags</span>
                                            <a href="#">Links</a>
                                            <a href="#">Brave</a>
                                            <a href="#">Brave</a>
                                        </div>
                                        <h3>
                                            <a href="blog-detail.html">
                                                Finally found a work computer setup That’s practically perf
                                            </a>
                                        </h3>
                                        <ul className="post-meta d-flex align-items-center flex-wrap clearfix">
                                            <li>
                                              <span className="author">
                                                <img src="images/resource/author-4.jpg" alt=""/>
                                              </span>{" "}
                                                Alaxandar / <span>4 year</span>{" "}
                                            </li>
                                            <li>
                                                <span className="icon flaticon-bubble-chat"/>3
                                            </li>
                                            <li>
                                                <span className="icon flaticon-clock"/>3 min Read
                                            </li>
                                        </ul>
                                        <div className="text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem the industrys standard dummy text ever since
                                            the when an unknown printer took a galley of type and scrambled
                                            it to make a type spe has been the industrys standard dummy
                                            text
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <Pagination />
                            <AuthorPart />



                        </div>
                        <div className="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12 left-sidebar">
                            <aside className="sidebar sticky-top">
                                <div className="sidebar-inner">


                                    <GalleryWidget />
                                    <SearchWidget/>
                                    <FollowUsWidget/>
                                    <PostsWidget/>
                                    <AdsWidget/>
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
