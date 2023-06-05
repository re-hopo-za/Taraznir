'use client'


import Header from "@/layouts/Header";

import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import CategoryWidget from "@/widgets/CategoryWidget";
import BreadCrumb from "@/layouts/BreadCrumb";
import PageTitle from "@/layouts/PageTitle";


type Params = {
    params : {
        slug:string
    }
}


// export const metadata: Metadata = {
//     title: '...',
//     description: '...',
// };

export default function ProjectPage({params :{slug}} : Params) {



    return (
        <div className="page-wrapper">
            <Header/>
            <PageTitle />

                <section className="service-detail-section">
                    <div className="auto-container" style={{maxWidth:1200}}>
                        <div className="image">
                            <img src="/images/resource/service-2.jpg" alt="" />
                        </div>
                        <div className="content" dir="rtl">
                            <h3>A popular feature that will change your life.</h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum
                            </p>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum
                            </p>
                            <h4>Technology Mobile apps Development</h4>
                            <p>
                                Must explain to you how all this mistaken idea of denouncing works
                                pleasure and praising uts pain was born and I will gives you a itself
                                completed account of the system, and sed expounds the ut actual teachings
                                of that greater sed explores truth. Denouncing works pleasures and
                                praising pains was us born and I will gives you a completed ut workers
                                accounts of the system. sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                            <p>
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                                minima veniam, quis nostrum exercitationem.
                            </p>
                            <ul className="check-list">
                                <li>Consectetur, adipisci velit, sed quia non numquam eius modi</li>
                                <li>
                                    Perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremquen
                                </li>
                                <li>Ut enim ad minima veniam, quis nostrum exercitationem</li>
                                <li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</li>
                            </ul>
                            <h5>4 Simple Steps</h5>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                amet,
                            </p>
                            <p>
                                Must explain to you how all this mistaken idea of denouncing works
                                pleasure and praising uts pain was born and I will gives you a itself
                                completed account of the system, and sed expounds the ut actual teachings
                                of that greater sed explores truth. Denouncing works pleasures and
                                praising pains was us born and I will gives you a completed ut workers
                                accounts of the system. sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                            <p>
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                                minima veniam, quis nostrum exercitationem.
                            </p>
                        </div>
                    </div>
                </section>


            <Sidebar/>
            <Footer/>
        </div>
    )
}

