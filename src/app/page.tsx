import Header from "@/layouts/Header";
import {MainSlider} from "@/partials/home/MainSlider";
import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import TestimonialPart from "@/partials/home/TestimonialPart";
import ProjectPart from "@/partials/home/ProjectPart";
import NewsPart from "@/partials/home/NewsPart";
import BlogPart from "@/partials/home/BlogPart";
import ResourcePart from "@/partials/home/ResourcePart";
import IntroductionPart from "@/partials/home/IntroductionPart";
import ServicePart from "@/partials/home/ServicePart";
import {use} from "react"

import {getStandards} from "#/getStandards";
import {getProjects} from "#/getProjects";
import {getNewses} from "#/getNews";
import {getBlogs} from "#/getBlogs";
import {getTheme} from "#/getTheme";
import {getOptions} from "#/getOptions";
import {OptionType} from "^/OptionType";
import {ThemeType} from "^/ThemeType";
import {PostsType} from "^/PostsType";
import {PostsGroupedType} from "^/PostsGroupedType";


export default function Home() {
    const resources:PostsType           = use(getStandards({limit:'16'} ));
    const projects:PostsGroupedType     = use(getProjects({limit:'12',byCategory:'true'} ));
    const newses:PostsType              = use(getNewses({limit:'3'} ));
    const blogs:PostsType               = use(getBlogs({limit:'5'} ));
    const testimonials:OptionType[]     = use(getOptions('home_testimonial_item' ));
    const themeOptions:ThemeType        = use(getTheme('_theme' ));

    // const ProductMixItUp = dynamic(
    //     () => {
    //         return import("@/partials/home/ProductPart");
    //     },
    //     { ssr: false }
    // );


    return (
        <div className="page-wrapper">
            <Header options={themeOptions}/>
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

            <Sidebar/>
            <Footer options={themeOptions}/>
        </div>
    )
}



