import {PostsType} from "^/PostsType";


export default function ResourcePart( { items }:{items:PostsType}) {
    return (
        <section className="products-section-two">

            <div className="bottom-white-border"/>
            <div className="auto-container">
                <div className="sec-title centered">
                    <h4>
                        <b>استاندارد‌ها</b> <span> لیست به روزترین استانداردهای جهان</span>
                    </h4>
                </div>

                <div className="inner-container">
                    <div className="slide">
                        <div className="row clearfix">
                            {
                                items && items.data && items.data.map( (item : any ,k : number) =>
                                    <div key={k} className="product-block-four col-lg-3 col-md-6 col-sm-6" dir="rtl">
                                        <div className="inner-box d-flex justify-content-between align-items-center flex-wrap">
                                            <div className="image">
                                                <span className="number">{k + 1 < 10 ? `0${k + 1}` : k + 1 }</span>
                                                <img src={item.images?.thumbnail} alt={item.title} width={106} height={80} />
                                            </div>
                                            <div className="content">
                                                <h6>
                                                    <a href={`/standard/${item.slug}`}>{item.title}</a>
                                                </h6>
                                                <div className="total-products" > {item.tag} </div>
                                            </div>
                                        </div>
                                    </div>
                               )
                            }
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}





