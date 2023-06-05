import Header from "@/layouts/Header";

import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import PageTitle from "@/layouts/PageTitle";
import Pagination from "@/layouts/Pagination";
import ClientPart from "@/partials/home/ClientPart";
import CounterPart from "@/partials/home/CounterPart";


export default function Project() {

    return (
        <div className="page-wrapper">
            <Header/>
            <PageTitle />


            <section className="portfolio-section-two">
                <div className="auto-container" style={{maxWidth:"1200px"}}>
                    <div className="row clearfix">
                        <div className="portfolio-block-two col-lg-6 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="portfolio-detail.html">
                                        <img src="images/gallery/5.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="lower-content clearfix">
                                    <div className="pull-left">
                                        <h4>
                                            <a href="portfolio-detail.html">Minimal Product Branding</a>
                                        </h4>
                                        <div className="designation">Finance &amp; Business</div>
                                    </div>
                                    <div className="pull-right">
                                        <a
                                            href="portfolio-detail.html"
                                            className="arrow flaticon-right-arrow-1"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="portfolio-block-two col-lg-6 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="portfolio-detail.html">
                                        <img src="images/gallery/5.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="lower-content clearfix">
                                    <div className="pull-left">
                                        <h4>
                                            <a href="portfolio-detail.html">Minimal Product Branding</a>
                                        </h4>
                                        <div className="designation">Finance &amp; Business</div>
                                    </div>
                                    <div className="pull-right">
                                        <a
                                            href="portfolio-detail.html"
                                            className="arrow flaticon-right-arrow-1"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="portfolio-block-two col-lg-6 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="portfolio-detail.html">
                                        <img src="images/gallery/5.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="lower-content clearfix">
                                    <div className="pull-left">
                                        <h4>
                                            <a href="portfolio-detail.html">Minimal Product Branding</a>
                                        </h4>
                                        <div className="designation">Finance &amp; Business</div>
                                    </div>
                                    <div className="pull-right">
                                        <a
                                            href="portfolio-detail.html"
                                            className="arrow flaticon-right-arrow-1"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="portfolio-block-two col-lg-6 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="portfolio-detail.html">
                                        <img src="images/gallery/5.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="lower-content clearfix">
                                    <div className="pull-left">
                                        <h4>
                                            <a href="portfolio-detail.html">Minimal Product Branding</a>
                                        </h4>
                                        <div className="designation">Finance &amp; Business</div>
                                    </div>
                                    <div className="pull-right">
                                        <a
                                            href="portfolio-detail.html"
                                            className="arrow flaticon-right-arrow-1"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="portfolio-block-two col-lg-6 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="portfolio-detail.html">
                                        <img src="images/gallery/5.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="lower-content clearfix">
                                    <div className="pull-left">
                                        <h4>
                                            <a href="portfolio-detail.html">Minimal Product Branding</a>
                                        </h4>
                                        <div className="designation">Finance &amp; Business</div>
                                    </div>
                                    <div className="pull-right">
                                        <a
                                            href="portfolio-detail.html"
                                            className="arrow flaticon-right-arrow-1"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="portfolio-block-two col-lg-6 col-md-6 col-sm-12">
                            <div className="inner-box">
                                <div className="image">
                                    <a href="portfolio-detail.html">
                                        <img src="images/gallery/5.jpg" alt="" />
                                    </a>
                                </div>
                                <div className="lower-content clearfix">
                                    <div className="pull-left">
                                        <h4>
                                            <a href="portfolio-detail.html">Minimal Product Branding</a>
                                        </h4>
                                        <div className="designation">Finance &amp; Business</div>
                                    </div>
                                    <div className="pull-right">
                                        <a
                                            href="portfolio-detail.html"
                                            className="arrow flaticon-right-arrow-1"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <Pagination />
                </div>
            </section>

            <CounterPart />

            <Sidebar/>
            <Footer/>
        </div>
    )
}


