
import PageTitle from "@/layouts/PageTitle"
import {PostsType} from "^/PostsType";
import {use} from "react";
import {getServices} from "#/getService";
import {truncateText} from "&/Helpers";


export default function Service() {
    const services:PostsType = use(getServices({limit:'16'} ));
    return (
        <>
            <PageTitle title={''}/>

            <section className="service-page-section mb-5">
                <div className="auto-container" style={{maxWidth:"1200px"}}>
                    <div className="row clearfix">
                        {
                            services && services.data && services.data.map( (item : any ,k : number) =>
                                <div key={k} className={`vision-block style-${k} col-lg-6 col-md-12 col-sm-12`}>
                                    <div
                                        className="inner-box wow fadeInLeft"
                                        data-wow-delay="0ms"
                                        data-wow-duration="1500ms"
                                    >
                                        <h3>
                                            <a href={`/service/${item.slug}`}>
                                                خدمات <br />
                                                {item.title}
                                            </a>
                                        </h3>
                                        <div className="text">
                                            {truncateText( item.summary ,220)}
                                        </div>
                                        <a href={`/service/${item.slug}`} className="read-more">
                                            ادامه مطلب
                                        </a>
                                    </div>
                                </div>
                            )
                        }
                    </div>
                </div>
            </section>
        </>
    )
}
