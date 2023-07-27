import Image from "next/image";

import produce from "%/images/icons/produce.svg";
import implement from "%/images/icons/implement.svg";
import counseling from "%/images/icons/counseling.svg";
import design from "%/images/icons/design-calculating.svg";

export default function ServicePart(){

    return(
        <section className="services-section-first">
            <div className="auto-container">
                <div className="sec-title clearfix">
                    <div className="pull-right">
                        <h2 style={{textAlign: "right"}}>
                            منتخب<br/>  خدمات مهندسی تارازنیر
                        </h2>
                    </div>
                    <div className="pull-left" style={{textAlign: "right"}}>
                        <div className="text" dir="rtl">
                            آیا شما علاقه مند هستید که بدانید چگونه می توانیم پروژه شما را انجام دهیم
                            <br/>
                            یک موفقیت؟ لطفا با ما تماس بگیرید.
                        </div>
                        <a className="more-service" href="services.html" style={{paddingRight: "38px"}}>
                            دیدن خدمات ما<span className="flaticon-left-arrow-1" />
                        </a>
                    </div>
                </div>
                <div className="row clearfix">
                    <div className="service-block col-lg-3 col-md-6 col-sm-12">
                        <div
                            className="inner-box wow fadeInLeft animated"
                            data-wow-delay="0ms"
                            data-wow-duration="1500ms"
                            style={{
                                visibility: "visible",
                                animationDuration: "1500ms",
                                animationDelay: "0ms",
                                animationName: "fadeInLeft"
                            }}
                        >
                            <div className="icon">
                                <Image src={produce} alt="produce" width={65}/>
                            </div>
                            <h5>
                                <a href="service-detail.html">تولید و تامین تجهیزات</a>
                            </h5>
                            <div className="text">
                                به کار گیری به روزترین روشهای مهندسی در ساخت کالا و همکاری با تولید کننده های در کلاس استانداردهای بین المللی
                            </div>
                        </div>
                    </div>
                    <div className="service-block col-lg-3 col-md-6 col-sm-12">
                        <div
                            className="inner-box wow fadeInLeft animated"
                            data-wow-delay="150ms"
                            data-wow-duration="1500ms"
                            style={{
                                visibility: "visible",
                                animationDuration: "1500ms",
                                animationDelay: "150ms",
                                animationName: "fadeInLeft"
                            }}
                        >
                            <div className="icon">
                                <Image src={implement} alt="implement" width={65}/>
                            </div>
                            <h5>
                                <a href="service-detail.html">اجرا</a>
                            </h5>
                            <div className="text">
                                نصب و راه اندازی با بهره گیری از ابزار مدرن و دستورالعمل های استاندارد
                            </div>
                        </div>
                    </div>
                    <div className="service-block col-lg-3 col-md-6 col-sm-12">
                        <div
                            className="inner-box wow fadeInLeft animated"
                            data-wow-delay="300ms"
                            data-wow-duration="1500ms"
                            style={{
                                visibility: "visible",
                                animationDuration: "1500ms",
                                animationDelay: "300ms",
                                animationName: "fadeInLeft"
                            }}
                        >
                            <div className="icon">
                                <Image src={counseling} alt="counseling" width={65}/>
                            </div>
                            <h5>
                                <a href="service-detail.html">مشاوره</a>
                            </h5>
                            <div className="text">
                                طراحی، مشاوره و تهیه مدارک مهندسی و اسناد مناقصه پروژه های الکتریکال
                            </div>
                        </div>
                    </div>
                    <div className="service-block col-lg-3 col-md-6 col-sm-12">
                        <div
                            className="inner-box wow fadeInLeft animated"
                            data-wow-delay="450ms"
                            data-wow-duration="1500ms"
                            style={{
                                visibility: "visible",
                                animationDuration: "1500ms",
                                animationDelay: "450ms",
                                animationName: "fadeInLeft"
                            }}
                        >
                            <div className="icon">
                                <Image src={design} alt="design-calculation" width={65}/>
                            </div>
                            <h5>
                                <a href="service-detail.html">طراحی و محاسبات</a>

                            </h5>
                            <div className="text">
                                طراحی و محاسبات با بهره گیری از اخرین استانداردهای طراحی سیستم های ارتینگ و حفاظت در برابر صاعقه
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
