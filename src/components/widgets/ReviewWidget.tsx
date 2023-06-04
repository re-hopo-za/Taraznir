


export default function ReviewWidget(){
    return(
        <div className="sidebar-widget review-widget">
            <div className="widget-content">
                <div className="content">
                    <div
                        className="intro-video"
                        style={{
                            backgroundImage: "url(images/resource/video-image-1.jpg)"
                        }}
                    >
                        <a
                            href="https://www.youtube.com/watch?v=kxPCFljwJws"
                            className="lightbox-image intro-video-box"
                        >
                            <span className="fa fa-play">
                              <i className="ripple" />
                            </span>
                        </a>
                        <h4>Preview this course</h4>
                    </div>
                    <div className="price">$11.99</div>
                    <div className="time-left">
                        Original Price $199.99 <br /> Discount94% off
                    </div>
                </div>
            </div>
        </div>
    )
}
