import Image from "next/image";

import toolsIcon from "%/images/icons/tool.svg";
import resourceIcon from "%/images/icons/scientific.svg";
import teamIcon from "%/images/icons/team.svg";
import experienceIcon from "%/images/icons/experience.svg";

export default function IntroductionPart(){

    return(
        <section className="feature-two">
            <div
                className="feature-two_circle-layer"
                style={{ backgroundImage: "url(images/background/pattern-8.png)" }}
            />
            <div className="auto-container">
                <div className="row clearfix">
                    <div className="feature-two_skill-column col-lg-6 col-md-12 col-sm-12" style={{paddingRight: "30px"}}>
                        <div className="feature-two_skill-inner" dir="rtl">
                            <div className="sec-title-two">
                                <div className="sec-title-two_title" style={{color: "#ffc30c"}}>انچه ما انجام میدهیم</div>
                                <h2 className="sec-title-two_heading" style={{paddingTop:10}}>
                                    علوم مهندسی و دانش روز را در سه زمینه: مشاوره و طراحی، اجرا، تولید به کار میبریم.
                                </h2>
                                <p style={{fontWeight: 300 ,textAlign: "justify"}}>
                                    حوزه اصلی این شرکت حفاظت در برابر صاعقه، ارتینگ و حفاظت در برابر اضافه ولتاژهای ناگهانی بوده اما با توجه به ظرفیت موجود در شرکت در حوزه های دیگر نیز مانند سیستم های حفاظت کاتدیک و تاسیسات الکتریکی فعالیت کرده ایم. خط مشی شرکت ترجمه و بهره گیری از استانداردهای روز دنیا در پروژه های مرتبط و انتشار این مدارک در جامعه مهندسی میباشد.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="feature-two_blocks-column col-lg-6 col-md-12 col-sm-12">
                        <div className="feature-two_blocks-inner">
                            <div
                                className="feature-two_pattern-layer"
                                style={{ backgroundImage: "url(images/background/pattern-7.png)" }}
                            />
                            <div className="row clearfix" dir="rtl">

                                <div className="feature-block_two col-lg-6 col-md-6 col-sm-12" style={{marginBottom:"30px"}} dir="rtl">
                                    <div className="feature-block_two-inner">
                                        <div className="feature-block_two-icon">
                                            <Image src={resourceIcon} alt="resource icon" />
                                        </div>
                                        <h5 className="feature-block_two-heading">
                                            منابع علمی روز
                                        </h5>
                                        <div className="feature-block_two-text">
                                            بهره گیری از استانداردهای روز دنیا در ساخت،طراحی و اجرا.
                                        </div>
                                        <a className="feature-block_two-arrow flaticon-left-arrow-2" href="#" />
                                    </div>
                                </div>
                                <div className="feature-block_two col-lg-6 col-md-6 col-sm-12" dir="rtl">
                                    <div className="feature-block_two-inner">
                                        <div className="feature-block_two-icon">
                                            <Image src={toolsIcon} alt="tools icon" />
                                        </div>
                                        <h5 className="feature-block_two-heading">
                                            ابزار مدرن
                                        </h5>
                                        <div className="feature-block_two-text">
                                            استفاده از ابزار استاندارد و مدرن سرعت و کیفیت پروژه های ما را افزایش داده است.
                                        </div>
                                        <a className="feature-block_two-arrow flaticon-left-arrow-2" href="#"/>
                                    </div>
                                </div>
                                <div className="feature-block_two col-lg-6 col-md-6 col-sm-12" dir="rtl">
                                    <div className="feature-block_two-inner">
                                        <div className="feature-block_two-icon">
                                            <Image src={teamIcon} alt="team icon" />
                                        </div>
                                        <h5 className="feature-block_two-heading">
                                            تیم حرفه ای
                                        </h5>
                                        <div className="feature-block_two-text">
                                            تیم کنترل پروژه با پایش و کنترل مراحل کار مطابق مبانی علمی روز کیفیت هر پروژه را رصد و تضمین میکند.
                                        </div>
                                        <a className="feature-block_two-arrow flaticon-left-arrow-2" href="#"/>
                                    </div>
                                </div>

                                <div className="feature-block_two col-lg-6 col-md-6 col-sm-12" dir="rtl">
                                    <div className="feature-block_two-inner" style={{marginTop: "25px"}}>
                                        <div className="feature-block_two-icon">
                                            <Image src={experienceIcon} alt="tools icon" />
                                        </div>
                                        <h5 className="feature-block_two-heading">
                                            تجربه تخصصی
                                        </h5>
                                        <div className="feature-block_two-text">
                                            استفاده از ابزار استاندارد و مدرن سرعت و کیفیت پروژه های ما را افزایش داده است.
                                        </div>
                                        <a className="feature-block_two-arrow flaticon-left-arrow-2" href="#"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    )
}
