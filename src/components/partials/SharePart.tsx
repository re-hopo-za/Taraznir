

export default function SharePart() {

    return (
        <div className="post-share-options">
            <div className="post-share-inner clearfix">
                <div className="tags-box">
                    <span className="tags">Tags:</span>
                    <a href="#">Business</a> <a href="#">Design </a>
                    <a href="#">apps</a> <a href="#">data</a>
                </div>
                <ul className="social-box">
                    <span className="share">Share :</span>
                    <li>
                        <a className="fa fa-facebook" href="#">
                            <span> </span>
                        </a>
                    </li>
                    <li>
                        <a className="fa fa-twitter" href="#"/>
                    </li>
                    <li>
                        <a className="fa fa-linkedin" href="#"/>
                    </li>
                    <li>
                        <a className="fa fa-pinterest-p" href="#"/>
                    </li>
                </ul>
            </div>
        </div>
    )
}