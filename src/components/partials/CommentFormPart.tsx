

export default function CommentFormPart(){

    return(
        <div className="comment-form">
            <div className="group-title">
                <h4>Write your comment</h4>
            </div>
            <div className="comment-form">
                <form method="post" action="blog.html">
                    <div className="row clearfix">
                        <div className="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input
                                type="text"
                                name="username"
                                placeholder="Enter Your name"
                            />
                        </div>
                        <div className="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input
                                type="text"
                                name="username"
                                placeholder="Enter Your mail"
                            />
                        </div>
                        <div className="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input
                                type="text"
                                name="phone"
                                placeholder="Enter Your Phone Number"
                            />
                        </div>
                        <div className="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="website" placeholder="Website" />
                        </div>
                        <div className="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea
                              className=""
                              name="message"
                              placeholder="Enter your Massage*"
                              defaultValue={""}
                            />
                        </div>
                        <div className="col-lg-12 col-md-12 col-sm-12 form-group">
                            <div className="check-box">
                                <input type="checkbox" name="remember-password" id="type-1" />
                                <label htmlFor="type-1">
                                    Save my name, email, and website in this browser for the next
                                    time.
                                </label>
                            </div>
                        </div>
                        <div className="col-lg-12 col-md-12 col-sm-12 form-group">
                            <div className="button-box">
                                <button className="theme-btn btn-style-one">post a comment</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    )
}
