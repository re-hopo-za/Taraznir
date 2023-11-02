import {MainSlider} from "@/partials/home/MainSlider";
import TestimonialPart from "@/partials/home/TestimonialPart";
import ProjectPart from "@/partials/home/ProjectPart";
import NewsPart from "@/partials/home/NewsPart";
import BlogPart from "@/partials/home/BlogPart";
import ResourcePart from "@/partials/home/ResourcePart";
import IntroductionPart from "@/partials/home/IntroductionPart";
import ServicePart from "@/partials/home/ServicePart";
import {use} from "react"

import {getStandards} from "#/getStandard";
import {getProjects} from "#/getProject";
import {getNewses} from "#/getNews";
import {getBlogs} from "#/getBlog";
import {getOptions} from "#/getOption";
import {OptionType} from "^/OptionType";
import {PostsType} from "^/PostsType";
import {PostsGroupedType} from "^/PostsGroupedType";


export default function Home() {
    const resources:PostsType           = use(getStandards({limit:'16'} ));
    const projects:PostsGroupedType     = use(getProjects({limit:'12',byCategory:'true'} ));
    const newses:PostsType              = use(getNewses({limit:'3'} ));
    const blogs:PostsType               = use(getBlogs({limit:'5'} ));
    const testimonials:OptionType[]     = use(getOptions('home_testimonial_item' ));


    // const ProductMixItUp = dynamic(
    //     () => {
    //         return import("@/partials/home/ProductPart");
    //     },
    //     { ssr: false }
    // );


    return (
        <>
            <MainSlider/>
            <ResourcePart items={resources}/>
            <ServicePart/>
            <IntroductionPart/>
            {/*<NewsSection />*/}
            <ProjectPart items={projects} />
            <NewsPart items={newses} />
            {/*<ProductMixItUp />*/}
            <BlogPart items={blogs}/>

            <TestimonialPart items={testimonials}/>
        </>


    )
}



