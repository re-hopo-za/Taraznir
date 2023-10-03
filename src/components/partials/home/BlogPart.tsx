import Image from "next/image";


export default function BlogPart({items}:{items:any}){

    return(
        <section className="news-section-three">
            <div className="auto-container">
                <div className="inner-container d-flex justify-content-between flex-wrap align-items-center mb-4">
                    <div className="button-box">
                        <a href="/blog" className="theme-btn btn-style-twelve clearfix">
                          <span className="btn-wrap">
                            <span className="text-one">نمایش تمامی مقاله‌ها</span>
                            <span className="text-two">نمایش تمامی مقاله‌ها</span>
                          </span>
                        </a>
                    </div>
                    <div className="sec-title centered mb-0 " >
                        <h4>
                            <b>مقاله‌های</b> <span>اخیر </span>
                        </h4>
                    </div>
                </div>
                <div className="row clearfix">
                    <div className="column col-lg-4 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                        {
                            items && items.data && items.data.map( (item : any ,k : number) => k <= 2 &&
                                <div key={k} className="news-block-four">
                                    <div className="inner-box d-flex justify-content-between">
                                        <div className="content">
                                            <ul className="post-info">
                                                <li>{ item.jalali_created_at }</li>
                                                <li>{ item.category.find((cat:any) => cat.id > 0 )?.title}</li>
                                            </ul>
                                            <h6>
                                                <a href={`/blog/${item.slug}`}>
                                                    { item.title }
                                                </a>
                                            </h6>
                                        </div>
                                        <div className="image">
                                            <a href={`/blog/${item.slug}`}>
                                                <img src={item.images?.thumbnail} width={140} height={105} alt={item.title} />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            )
                        }
                    </div>
                    <div className="column col-lg-8 col-md-12 col-sm-12">
                        <div className="row clearfix">
                            {
                                items && items.data && items.data.map( (item : any ,k : number) =>  k >= 3 && k <= 5 &&
                                    <div key={k} className="news-block-three col-lg-6 col-md-6 col-sm-12">
                                        <div className="inner-box">
                                            <div className="image">
                                                <a href={`/blog/${item.slug}`}>
                                                    <img src={item.images?.cover} width={420} height={315} alt={item.title} />
                                                </a>
                                            </div>
                                            <div className="lower-content">
                                                <ul className="post-info">
                                                    <li>{ item.category.find((cat:any) => cat.id > 0 )?.title}</li>
                                                    <li>{ item.jalali_created_at }</li>
                                                </ul>
                                                <h5>
                                                    <a href={`/blog/${item.slug}`}>
                                                        {item.title}
                                                    </a>
                                                </h5>
                                                <div className="text">
                                                    {item.summary}
                                                </div>
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
