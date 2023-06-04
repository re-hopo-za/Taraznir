'use client'

import { Line } from 'rc-progress';
import {useState} from "react";
import CommentPart from "@/partials/CommentPart";
import CommentFormPart from "@/partials/CommentFormPart";


export default function TutorialTabsPart(){

    const [activeItem ,setActiveItem] = useState(0);

    const activeChecker = ( index :number ,classList :string ,activeClass :string ) :string => {
        return activeItem === index ? `${classList} ${activeClass}` : classList
    }

    return(
        <div className="course-info-tabs">
            <div className="course-tabs tabs-box">
                <ul className="tab-btns tab-buttons clearfix">
                    <li
                        data-tab="#prod-class"
                        className={activeChecker(0 , 'tab-btn', 'active-btn')}
                        onClick={()=>setActiveItem(0)}
                    >
                        Class Details
                    </li>
                    <li
                        data-tab="#prod-review"
                        className={activeChecker(1 , 'tab-btn', 'active-btn')}
                        onClick={()=>setActiveItem(1)}
                    >
                        Reviews
                    </li>
                    <li
                        data-tab="#comment-form"
                        className={activeChecker(2 , 'tab-btn', 'active-btn')}
                        onClick={()=>setActiveItem(2)}
                    >
                        Comment Form
                    </li>
                </ul>
                <div className="tabs-content">
                    <div className={activeChecker(0 , 'tab', 'active-tab')} id="prod-class">
                        <div className="content">
                            <div className="class-detail-content" dir="rtl">
                                <h4>25 That Prevent Job Seekers From Overcoming Failure</h4>
                                <div className="text">
                                    Phasellus enim magna, varius et commodo ut, ultricies
                                    vitae velit. Ut nulla tellus, eleifend euismod
                                    pellentesque vel, sagittis vel justo. In libero urna,
                                    venenatis sit amet ornare non, suscipit nec risus. Sed
                                    consequat justo non mauris pretium at tempor justo
                                    sodales. Quisque tincidunt.
                                </div>
                                <h6>What you’ll learn?</h6>
                                <ul className="list-style-one">
                                    <li>
                                        Phasellus enim magna, up above the most like varius et
                                        commodo ut.
                                    </li>
                                    <li>
                                        Sed consequat justo non profit us mauris pretium at
                                        tempor justo.
                                    </li>
                                    <li>
                                        Ut nulla tellus, eleifend euismod pellentesque most of
                                        the vel, sagitti
                                    </li>
                                    <li>Phasellus enim magna, varius et commodo ut.</li>
                                    <li>
                                        Sed consequat justo non mauris recent pretium at tempor
                                        justo.
                                    </li>
                                    <li>
                                        Ut nulla tellus, eleifend euismod pellentesque vel,
                                        sagitti
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div className={activeChecker(1 , 'tab', 'active-tab')} id="prod-review">
                        <div className="content">
                            <div className="student-review-box">
                                <h6 dir="rtl">Student Feedback</h6>
                                <div className="inner-student-review-box">
                                    <div className="row clearfix">
                                        <div className="rating-column col-lg-3 col-md-6 col-sm-12">
                                            <div className="inner-column">
                                                <div className="total-rating">4.2</div>
                                                <div className="rating">
                                                    <span className="fa fa-star" />
                                                    <span className="fa fa-star" />
                                                    <span className="fa fa-star" />
                                                    <span className="fa fa-star" />
                                                    <span className="fa light fa-star-o" />
                                                </div>
                                                <div className="title">Course Rating</div>
                                            </div>
                                        </div>
                                        <div className="graph-column col-lg-6 col-md-12 col-sm-12">
                                            <div className="skills">
                                                <div className="skill-item">
                                                    <div className="skill-header clearfix">
                                                        <div className="skill-percentage">
                                                            <Line
                                                                strokeLinecap="square"
                                                                percent={10}
                                                                strokeWidth={3}
                                                                strokeColor="#FFC30CFF"
                                                                trailColor="#ddd"
                                                                trailWidth={2}
                                                            />
                                                        </div>
                                                    </div>
                                                    <div className="skill-bar">
                                                        <div className="bar-inner">
                                                            <div
                                                                className="bar progress-line"
                                                                data-width={78}
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="skill-item">
                                                    <div className="skill-header clearfix">
                                                        <div className="skill-percentage">
                                                            <div className="count-box">
                                                                <Line
                                                                    strokeLinecap="square"
                                                                    percent={60}
                                                                    strokeWidth={3}
                                                                    strokeColor="#FFC30CFF"
                                                                    trailColor="#ddd"
                                                                    trailWidth={2}
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div className="skill-bar">
                                                        <div className="bar-inner">
                                                            <div
                                                                className="bar progress-line"
                                                                data-width={60}
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="skill-item">
                                                    <div className="skill-header clearfix">
                                                        <div className="skill-percentage">
                                                            <div className="count-box">
                                                                <Line
                                                                    strokeLinecap="square"
                                                                    percent={20}
                                                                    strokeWidth={3}
                                                                    strokeColor="#FFC30CFF"
                                                                    trailColor="#ddd"
                                                                    trailWidth={2}
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div className="skill-bar">
                                                        <div className="bar-inner">
                                                            <div
                                                                className="bar progress-line"
                                                                data-width={45}
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="skill-item">
                                                    <div className="skill-header clearfix">
                                                        <div className="skill-percentage">
                                                            <div className="count-box">
                                                                <Line
                                                                    strokeLinecap="square"
                                                                    percent={80}
                                                                    strokeWidth={3}
                                                                    strokeColor="#FFC30CFF"
                                                                    trailColor="#ddd"
                                                                    trailWidth={2}
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div className="skill-bar">
                                                        <div className="bar-inner">
                                                            <div
                                                                className="bar progress-line"
                                                                data-width={15}
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="skill-item">
                                                    <div className="skill-header clearfix">
                                                        <div className="skill-percentage">
                                                            <div className="count-box">
                                                                <Line
                                                                    strokeLinecap="square"
                                                                    percent={50}
                                                                    strokeWidth={3}
                                                                    strokeColor="#FFC30CFF"
                                                                    trailColor="#ddd"
                                                                    trailWidth={2}
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div className="skill-bar">
                                                        <div className="bar-inner">
                                                            <div
                                                                className="bar progress-line"
                                                                data-width={1}
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div className="stars-column col-lg-3 col-md-6 col-sm-12">
                                            <div className="rating">
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa light fa-star-o" />
                                                <i>78%</i>
                                            </div>
                                            <div className="rating">
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa light fa-star-o" />
                                                <i>60%</i>
                                            </div>
                                            <div className="rating">
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa light fa-star-o" />
                                                <i>45%</i>
                                            </div>
                                            <div className="rating">
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa light fa-star-o" />
                                                <i>15%</i>
                                            </div>
                                            <div className="rating">
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa fa-star" />
                                                <span className="fa light fa-star-o" />
                                                <i>1%</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <CommentPart />
                        </div>
                    </div>
                    <div className={activeChecker(2 , 'tab', 'active-tab')} id="comment-form">
                        <div className="content">

                            <CommentFormPart />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}
