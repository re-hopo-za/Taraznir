'use client'

import MiniSlider from "@/partials/home/MiniSlider";
import {useState} from "react";
import {PostsGroupedType} from "^/PostsGroupedType";



export default function ProjectPart({items}:{items:PostsGroupedType}){

    const [activeItem ,setActiveItem] = useState(0);

    const activeChecker = ( index :number ,classList :string ,activeClass :string ) :string => {
        return activeItem === index ? `${classList} ${activeClass}` : classList
    }


    return(
        <section className="services-section">
            <div className="auto-container">
                <div className="sec-title" style={{direction:'rtl' ,marginBottom:60}}>
                    <h4>
                        <b>پروژه‌های</b> <span>منتخب </span>
                    </h4>
                </div>
                <div className="services-info-tabs">
                    <div className="services-tabs tabs-box">
                        <ul className="tab-btns tab-buttons clearfix">
                            {
                                items && items.grouped.map( (cat : any ,k : number) =>
                                    <li key={k}
                                        data-tab={`#project-cat-${k}`}
                                        className={activeChecker( k , 'tab-btn', 'active-btn')}
                                        onClick={()=>setActiveItem( k )}
                                    >
                                        {cat.title}
                                    </li>
                                )
                            }
                        </ul>
                        <div className="tabs-content">
                            {
                                items.grouped && items.grouped.map( (cat : any ,k : number) =>
                                    <div key={k} className={activeChecker(k ,'tab', 'active-tab')} id={`project-cat-${k}`}>
                                        <div className="row clearfix">
                                            {
                                                cat.project && cat.project.map( (project : any ,kp : number) => kp < 2 &&
                                                    <div key={kp} className="service-block active col-lg-6 col-md-6 col-sm-12">
                                                        <div className="inner-box">
                                                            <div className="image">
                                                                <a href={`/project/${project.slug}`}>
                                                                    <img src={project.images.cover} width={420} height={315} alt={project.title} />
                                                                </a>
                                                            </div>
                                                            <div className="lower-content">
                                                                <h5>
                                                                    <a href={`/project/${project.slug}`}>{project.title}</a>
                                                                </h5>
                                                                <div className="text">
                                                                    {project.summary}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                )
                                            }
                                        </div>
                                    </div>
                                )
                            }
                        </div>
                    </div>
                </div>
                <MiniSlider items={items.items} route={'project'}/>
            </div>
        </section>


    )
}
