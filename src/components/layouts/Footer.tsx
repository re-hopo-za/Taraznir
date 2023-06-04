

const Footer = () => {

    return(
        <footer className="main-footer style-two">
            <div className="auto-container">
                <div className="widgets-section">
                    <div className="row clearfix">
                        <div className="big-column col-lg-6 col-md-12 col-sm-12">
                            <div className="row clearfix">
                                <div className="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div className="footer-widget links-widget">
                                        <div className="logo">
                                            <a href="index.html">
                                                <img src="images/logo.png" alt="" title="" />
                                            </a>
                                        </div>
                                        <div className="text">
                                            A new way to make the payments easy,reliable <br /> and 100%
                                            secure. claritatem itamconse quat <br /> Exerci tation
                                            ullamcorper.
                                        </div>
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
                                <div className="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div className="footer-widget links-widget">
                                        <h5>Usefull Links</h5>
                                        <ul className="page-list">
                                            <li>
                                                <a href="#">Contact us</a>
                                            </li>
                                            <li>
                                                <a href="#">How it Works</a>
                                            </li>
                                            <li>
                                                <a href="#">Create</a>
                                            </li>
                                            <li>
                                                <a href="#">Explore</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms &amp; Services</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="big-column col-lg-6 col-md-12 col-sm-12">
                            <div className="row clearfix">
                                <div className="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div className="footer-widget links-widget">
                                        <h5>Quick Links</h5>
                                        <ul className="page-list">
                                            <li>
                                                <a href="#">Your Account</a>
                                            </li>
                                            <li>
                                                <a href="#">Returns &amp; Exchanges</a>
                                            </li>
                                            <li>
                                                <a href="#">Return Center</a>
                                            </li>
                                            <li>
                                                <a href="#">Purchase Hisotry</a>
                                            </li>
                                            <li>
                                                <a href="#">App Download</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div className="footer-widget newslatter-widget">
                                        <h5>Subscribe Newslatter</h5>
                                        <div className="text">
                                            Exerci tation ullamcorper suscipit lobortis <br /> nisl
                                            aliquip ex ea commodo
                                        </div>
                                        <div className="subscribe-box">
                                            <form method="post" action="contact.html">
                                                <div className="form-group">
                                                    <input
                                                        type="email"
                                                        name="search-field"
                                                        defaultValue=""
                                                        placeholder="Enter Mail"
                                                    />
                                                    <button
                                                        type="submit"
                                                        className="theme-btn submit-btn flaticon-send"
                                                    />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="footer-bottom">
                    <div className="d-flex justify-content-between align-items-center flex-wrap">
                        <div className="copyright">
                            <span>© 2022</span> Powered by Theme. All Rights Reserved.
                        </div>
                        <ul className="footer-bottom-nav">
                            <li>
                                <a href="#">Terms and conditions</a>
                            </li>
                            <li>
                                <a href="#">Privacy policy</a>
                            </li>
                            <li>
                                <a href="#">Login / Signup</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    )
}


export default Footer;
