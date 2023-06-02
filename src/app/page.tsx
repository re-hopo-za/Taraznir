
import Header from "@/layouts/Header";
import {MainSlider} from "@/features/MainSlider";
import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import {Testimonial} from "@/features/Testimonial";
import TabItems from "@/features/TabItems";
import BlogSlider from "@/features/BlogSlider";
import dynamic from "next/dynamic";
import BlogSection from "@/features/BlogSection";
import ResourcesSection from "@/features/ResourcesSection";
import NewsSection from "@/features/NewsSection";
import DescriptionSection from "@/features/DescriptionSection";
import AnotherSliderSection from "@/features/AnotherSliderSection";




export default function Home() {

    const ProductMixItUp = dynamic(
        () => {
            return import("@/features/ProductMixItUp");
        },
        { ssr: false }
    );

    return (
        <div className="page-wrapper">
            <Header />
            <MainSlider />
            <ResourcesSection />
            {/*<AnotherSliderSection/>*/}
            <DescriptionSection />
            {/*<NewsSection />*/}
            <TabItems />
            <BlogSlider />
            <ProductMixItUp />
            <BlogSection />

            <Testimonial />

            <Sidebar />
            <Footer />
        </div>
    )
}
