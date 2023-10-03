
export default function NewsPart({items}:{items:any}){
    return(
        <section className="news-section-two">
            <div className="auto-container">
                <div className="sec-title centered">
                    <h4>
                        <b>اخبار</b> <span> لیست به روزترین اخبار </span>
                    </h4>
                </div>
                <div className="row clearfix">
                    {
                        items && items.data && items.data.map( (item : any ,k : number) =>
                            <div key={k} className="news-block-two col-lg-4 col-md-6 col-sm-12">
                                <div
                                    className="inner-box wow fadeInLeft"
                                    data-wow-delay="0ms"
                                    data-wow-duration="1500ms"
                                    dir="rtl"
                                >
                                    <div className="image">
                                        {
                                            item.category && item.category.length > 0 && <div className="tag"> { item.category.find((cat:any) => cat.id > 0 )?.title} </div>
                                        }
                                        <a href={`/news/${item.slug}`}>
                                            <img src={item.images?.cover} width={420} height={315} alt={item.title} />
                                        </a>
                                    </div>
                                    <div className="lower-content">
                                        <div className="info">
                                            توسط: <span>{item.meta && item.meta.find((meta:any) => meta.key == 'author').value} </span> <b>{item.jalali_created_at}</b>
                                        </div>
                                        <h6>
                                            <a href={`/news/${item.slug}`}>
                                                {item.title}
                                            </a>
                                        </h6>
                                        <a className="read-more" href={`/news/${item.slug}`}>
                                            ادامه مطلب
                                        </a>
                                    </div>
                                </div>
                            </div>
                        )
                    }
                </div>
                <div className="button-box text-center">
                    <a href="/news" className="theme-btn btn-style-one">
                        بیشتر <span className="icon flaticon-left-arrow" />
                    </a>
                </div>
            </div>
        </section>

    )
}
