
import PageTitle from "@/layouts/PageTitle";
import {use} from "react";
import {getService} from "#/getService";
import {PostType} from "^/PostType";
import Image from "next/image";


export default function ProjectPage({ params }: { params: { slug: string } }) {

    const service:PostType = use(getService( params.slug ));


    return (
        <div className="page-wrapper">
            {
                service && <>
                    <PageTitle title={service.title} />

                    <section className="service-detail-section">
                        <div className="auto-container" style={{maxWidth:1200}}>
                            <div className="image">
                                <img src={service.images.single} width={1290} height={548} alt={service.title} />
                            </div>
                            <div className="content" dir="rtl">
                                {service.content}
                            </div>
                        </div>
                    </section>
                </>
            }
        </div>
    )
}

