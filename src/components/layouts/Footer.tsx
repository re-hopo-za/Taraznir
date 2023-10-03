import {ThemeType} from "^/ThemeType";
import {menuCreator} from "&/Helpers";
import Image from "next/image";


const Footer = ({options}:{options:ThemeType}) => {

    return(
        <footer className="main-footer style-two" dir="rtl">
            <div className="auto-container">
                <div className="widgets-section">
                    <div className="row clearfix">
                        <div className="big-column col-lg-6 col-md-12 col-sm-12">
                            <div className="row clearfix">
                                <div className="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div className="footer-widget links-widget">
                                        <div className="logo">
                                            <a href="/">
                                                <Image src="/images/logos/taraznir-logo-0.25x.png" alt="taraznir logo" width={158} height={41}/>
                                            </a>
                                        </div>
                                        <div className="text">
                                            ما بیش از 15 سال تجربه داریم
                                            <br/>
                                            که می توانیم در 24 ساعت شبانه روز به شما
                                            <br/>
                                            کمک کنیم.
                                        </div>
                                    </div>
                                    <br/>
                                    <br/>

                                    <div className="subscribe-box">
                                        <form method="post" action="/form/subscribe">
                                            <div className="form-group">
                                                <input
                                                    type="email"
                                                    name="search-field"
                                                    defaultValue=""
                                                    placeholder="ایمیل خود را وارد کنید"
                                                />
                                                <button
                                                    type="submit"
                                                    className="theme-btn submit-btn flaticon-send"
                                                />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div className="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div className="footer-widget links-widget">
                                        <h6>خدمات اصلی</h6>
                                        {menuCreator(options ,'first_footer_menu' ,'page-list')}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="big-column col-lg-6 col-md-12 col-sm-12">
                            <div className="row clearfix">
                                <div className="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div className="footer-widget links-widget">
                                        <h6>صفحات اصلی</h6>
                                        {menuCreator(options ,'second_footer_menu' ,'page-list')}
                                    </div>
                                </div>
                                <div className="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div className="footer-widget call-us-information">
                                        <h6>اطلاعات تماس</h6>
                                        <ul>
                                            <li>
                                                <div className="inner">
                                                    <span className="fa fa-map-marker" />
                                                    <span className="call-text">
                                                        تهران خیابان فلسطین جنوبی, مابین لبافی نژاد و جمهوری پلاک 106 طبقه
                                                        سوم-واحد 9
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="inner">
                                                    <span className="fa fa-phone" />
                                                    <div>
                                                        <p>09120190256</p>
                                                        <p> 021-66467148 </p>
                                                        <p> 021-66467362</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="inner">
                                                    <span style={{fontSize:15}} className="fa fa-envelope" />
                                                    <span className="call-text">info@taraznir.com</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="footer-bottom">
                    <div className="d-flex justify-content-between align-items-center flex-wrap">
                        <div className="copyright">©
                             تمام حقوق برای <span> Taraznir</span> محفوظ است
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
                        <ul className="footer-bottom-nav">
                            <li>
                                <a href="#">شرایط و ضوابط</a>
                            </li>
                            <li>
                                <a href="#">سیاست حفظ حریم خصوصی</a>
                            </li>
                            <li>
                                <a href="#">ورود / ثبت‌نام</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    )
}


export default Footer;
