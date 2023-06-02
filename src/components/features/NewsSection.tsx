
// Masonary
function enableMasonry() {
    if($('.masonry-items-container').length){

        var winDow = $(window);
        // Needed variables
        var $container=$('.masonry-items-container');

        $container.isotope({
            itemSelector: '.masonry-item',
            masonry: {
                columnWidth : '.masonry-item.col-lg-3'
            },
            animationOptions:{
                duration:500,
                easing:'linear'
            }
        });

        winDow.on('bind', function() {

            $container.isotope({
                itemSelector: '.masonry-item',
                animationOptions: {
                    duration: 500,
                    easing	: 'linear',
                    queue	: false
                }
            });
        });
    }
}

enableMasonry();

export default function NewsSection(){
    return(
        <section className="news-six">
            <div className="auto-container">
                {/* Sec Title Five */}
                <div className="sec-title-five centered">
                    <div className="sec-title-five_title">From Our Blog</div>
                    <h2 className="sec-title-five_heading">Our News Section</h2>
                    <div className="sec-title-five_text">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui <br />{" "}
                        officia deserunt mollit anim id est laborum.
                    </div>
                </div>
                <div
                    className="masonry-items-container-two row clearfix"
                    style={{ position: "relative", height: "819.469px" }}
                >
                    {/* Project Two Block */}
                    <div
                        className="news-block_six masonry-item col-lg-4 col-md-6 col-sm-12"
                        style={{ position: "absolute", left: 0, top: 0 }}
                    >
                        <div className="news-block_six-inner">
                            <div className="news-block_six-image">
                                <img src="images/resource/news-16.jpg" alt="" />
                                <div className="news-block_six-overlay">
                                    <a
                                        href="images/resource/news-16.jpg"
                                        className="plus-icon lightbox-image fa-solid fa-plus fa-fw"
                                    />
                                </div>
                                <div className="news-block_six-content">
                                    <div className="news-block_six-date">
                                        Dec 15, 2020 <span>Finance</span>
                                    </div>
                                    <h6 className="news-block_six-heading">
                                        <a href="blog-detail.html">
                                            Lorem ipsum dolor sit amet con sectetur adipisicing
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* Project Two Block */}
                    <div
                        className="news-block_six masonry-item col-lg-4 col-md-6 col-sm-12"
                        style={{ position: "absolute", left: 388, top: 0 }}
                    >
                        <div className="news-block_six-inner">
                            <div className="news-block_six-image">
                                <img src="images/resource/news-17.jpg" alt="" />
                                <div className="news-block_six-overlay">
                                    <a
                                        href="images/resource/news-17.jpg"
                                        className="plus-icon lightbox-image fa-solid fa-plus fa-fw"
                                    />
                                </div>
                                <div className="news-block_six-content">
                                    <div className="news-block_six-date">
                                        Dec 15, 2020 <span>Finance</span>
                                    </div>
                                    <h6 className="news-block_six-heading">
                                        <a href="blog-detail.html">
                                            Lorem ipsum dolor sit amet con sectetur adipisicing
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* Project Two Block */}
                    <div
                        className="news-block_six masonry-item col-lg-4 col-md-6 col-sm-12"
                        style={{ position: "absolute", left: 776, top: 0 }}
                    >
                        <div className="news-block_six-inner">
                            <div className="news-block_six-image">
                                <img src="images/resource/news-18.jpg" alt="" />
                                <div className="news-block_six-overlay">
                                    <a
                                        href="images/resource/news-18.jpg"
                                        className="plus-icon lightbox-image fa-solid fa-plus fa-fw"
                                    />
                                </div>
                                <div className="news-block_six-content">
                                    <div className="news-block_six-date">
                                        Dec 15, 2020 <span>Finance</span>
                                    </div>
                                    <h6 className="news-block_six-heading">
                                        <a href="blog-detail.html">
                                            Lorem ipsum dolor sit amet con sectetur adipisicing
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* Project Two Block */}
                    <div
                        className="news-block_six masonry-item col-lg-4 col-md-6 col-sm-12"
                        style={{ position: "absolute", left: 388, top: 307 }}
                    >
                        <div className="news-block_six-inner">
                            <div className="news-block_six-image">
                                <img src="images/resource/news-20.jpg" alt="" />
                                <div className="news-block_six-overlay">
                                    <a
                                        href="images/resource/news-20.jpg"
                                        className="plus-icon lightbox-image fa-solid fa-plus fa-fw"
                                    />
                                </div>
                                <div className="news-block_six-content">
                                    <div className="news-block_six-date">
                                        Dec 15, 2020 <span>Finance</span>
                                    </div>
                                    <h6 className="news-block_six-heading">
                                        <a href="blog-detail.html">
                                            Lorem ipsum dolor sit amet con sectetur adipisicing
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* Project Two Block */}
                    <div
                        className="news-block_six masonry-item col-lg-4 col-md-6 col-sm-12"
                        style={{ position: "absolute", left: 0, top: 512 }}
                    >
                        <div className="news-block_six-inner">
                            <div className="news-block_six-image">
                                <img src="images/resource/news-19.jpg" alt="" />
                                <div className="news-block_six-overlay">
                                    <a
                                        href="images/resource/news-19.jpg"
                                        className="plus-icon lightbox-image fa-solid fa-plus fa-fw"
                                    />
                                </div>
                                <div className="news-block_six-content">
                                    <div className="news-block_six-date">
                                        Dec 15, 2020 <span>Finance</span>
                                    </div>
                                    <h6 className="news-block_six-heading">
                                        <a href="blog-detail.html">
                                            Lorem ipsum dolor sit amet con sectetur adipisicing
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* Project Two Block */}
                    <div
                        className="news-block_six masonry-item col-lg-4 col-md-6 col-sm-12"
                        style={{ position: "absolute", left: 776, top: 512 }}
                    >
                        <div className="news-block_six-inner">
                            <div className="news-block_six-image">
                                <img src="images/resource/news-21.jpg" alt="" />
                                <div className="news-block_six-overlay">
                                    <a
                                        href="images/resource/news-21.jpg"
                                        className="plus-icon lightbox-image fa-solid fa-plus fa-fw"
                                    />
                                </div>
                                <div className="news-block_six-content">
                                    <div className="news-block_six-date">
                                        Dec 15, 2020 <span>Finance</span>
                                    </div>
                                    <h6 className="news-block_six-heading">
                                        <a href="blog-detail.html">
                                            Lorem ipsum dolor sit amet con sectetur adipisicing
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
