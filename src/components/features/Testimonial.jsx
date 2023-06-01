'use client'

export function Testimonial () {
    return(
        <section className="testimonial-section">
        <div
            className="pattern-layer"
            style={{ backgroundImage: "url(images/background/pattern-3.png)" }}
        />
        <div className="auto-container">
            <div className="inner-container">
                <div
                    className="pattern-layer-two"
                    style={{ backgroundImage: "url(images/background/pattern-4.png)" }}
                />
                <div
                    className="vector-layer"
                    style={{ backgroundImage: "url(images/background/pattern-2.png)" }}
                />
                <Splide className="single-item-carousel">
                    <SplideSlide className="testimonial-block">
                        <div className="inner-box">
                            <div className="row clearfix">
                                <div className="image-column col-lg-4 col-md-12 col-sm-12">
                                    <div className="inner-column">
                                        <div
                                            className="arrow-layer"
                                            style={{ backgroundImage: "url(images/icons/arrow-2.png)" }}
                                        />
                                        <div className="image">
                                            <img src="images/resource/author-2.jpg" alt="" />
                                            {/* Social Box */}
                                            <ul className="social-box">
                                                <li>
                                                    <a
                                                        href="https://www.facebook.com/"
                                                        className="fa fa-facebook-f"
                                                    />
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://www.twitter.com/"
                                                        className="fa fa-twitter"
                                                    />
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://dribbble.com/"
                                                        className="fa fa-dribbble"
                                                    />
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://www.linkedin.com/"
                                                        className="fa fa-linkedin"
                                                    />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {/* Content Column */}
                                <div className="content-column col-lg-8 col-md-12 col-sm-12">
                                    <div className="inner-column">
                                        <div className="rating">
                                            <span className="fa fa-star" />
                                            <span className="fa fa-star" />
                                            <span className="fa fa-star" />
                                            <span className="fa fa-star" />
                                            <span className="fa fa-star" />
                                        </div>
                                        <div className="text">
                                            The most <span>advanced</span> revenue than this. I will
                                            refer everyone I know I like Level more and more each day
                                            because it makes my life a lot easier. It really saves me
                                            time and effort.
                                        </div>
                                        <div className="quote-icon flaticon-quote" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </SplideSlide>
                    <SplideSlide className="testimonial-block">
                        <div className="inner-box">
                            <div className="row clearfix">
                                {/* Image Column */}
                                <div className="image-column col-lg-4 col-md-12 col-sm-12">
                                    <div className="inner-column">
                                        <div
                                            className="arrow-layer"
                                            style={{ backgroundImage: "url(images/icons/arrow-2.png)" }}
                                        />
                                        <div className="image">
                                            <img src="images/resource/author-2.jpg" alt="" />
                                            {/* Social Box */}
                                            <ul className="social-box">
                                                <li>
                                                    <a
                                                        href="https://www.facebook.com/"
                                                        className="fa fa-facebook-f"
                                                    />
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://www.twitter.com/"
                                                        className="fa fa-twitter"
                                                    />
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://dribbble.com/"
                                                        className="fa fa-dribbble"
                                                    />
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://www.linkedin.com/"
                                                        className="fa fa-linkedin"
                                                    />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {/* Content Column */}
                                <div className="content-column col-lg-8 col-md-12 col-sm-12">
                                    <div className="inner-column">
                                        <div className="rating">
                                            <span className="fa fa-star" />
                                            <span className="fa fa-star" />
                                            <span className="fa fa-star" />
                                            <span className="fa fa-star" />
                                            <span className="fa fa-star" />
                                        </div>
                                        <div className="text">
                                            The most <span>advanced</span> revenue than this. I will
                                            refer everyone I know I like Level more and more each day
                                            because it makes my life a lot easier. It really saves me
                                            time and effort.
                                        </div>
                                        <div className="quote-icon flaticon-quote" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </SplideSlide>
                </Splide>
            </div>
        </div>
    </section>
    )
}

