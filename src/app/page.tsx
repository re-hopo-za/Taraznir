
import Header from "@/layouts/Header";
import {MainSlider} from "@/partials/home/MainSlider";
import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import TestimonialPart from "@/partials/home/TestimonialPart";
import ProjectPart from "@/partials/home/ProjectPart";
import NewsPart from "@/partials/home/NewsPart";
import dynamic from "next/dynamic";
import BlogPart from "@/partials/home/BlogPart";
import ResourcePart from "@/partials/home/ResourcePart";
import IntroductionPart from "@/partials/home/IntroductionPart";
import ServicePart from "@/partials/home/ServicePart";





export default function Home() {

    const ProductMixItUp = dynamic(
        () => {
            return import("@/partials/home/ProductPart");
        },
        { ssr: false }
    );

    return (
        <div className="page-wrapper">
            <Header />
            <MainSlider />
            <ResourcePart />
            <ServicePart />
            <IntroductionPart />
            {/*<NewsSection />*/}
            <ProjectPart />
            <NewsPart />
            <ProductMixItUp />
            <BlogPart />

            <TestimonialPart />

            <Sidebar />
            <Footer />
        </div>
    )
}
