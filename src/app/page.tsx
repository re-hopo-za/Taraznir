
import Header from "@/layouts/Header";
import {MainSlider} from "@/features/MainSlider";
import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import {Testimonial} from "@/features/Testimonial";




export default function Home() {

    return (
        <div className="page-wrapper">
            <Header />
            <MainSlider />
            {/*<Testimonial />*/}
            <Sidebar />
            <Footer />
        </div>
    )
}
