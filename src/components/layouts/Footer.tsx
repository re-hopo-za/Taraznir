import {ThemeType} from "^/ThemeType";
import {filterMetaByKy, findMetaValueByKey, isJsonString, menuCreator, searchMetaByKeyword} from "&/Helpers";
import Image from "next/image";
import {MetaType} from "^/MetaType";


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
                                            {options.theme_settings.value}
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
                                                        {findMetaValueByKey(options.theme_settings.meta ,'footer_address')}
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="inner">
                                                    <span className="fa fa-phone" />
                                                    <div>
                                                        {filterMetaByKy(options.theme_settings.meta ,'footer_address').map( (phone:MetaType ,key:number) =>
                                                            <p key={key}> {phone.value} </p>
                                                        )}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div className="inner">
                                                    <span style={{fontSize:15}} className="fa fa-envelope" />
                                                    <span className="call-text">{findMetaValueByKey(options.theme_settings.meta ,'info@taraznir.com')}</span>
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
                            {searchMetaByKeyword(options.theme_settings.meta ,'social_').map( (social:MetaType ,key:number) =>
                                isJsonString(social.value) && <li key={key}>
                                    <a
                                        href={ JSON.parse(social.value).value}
                                        className={`fa ${JSON.parse(social.value).icon}`}
                                    />
                                </li>
                            )}
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
