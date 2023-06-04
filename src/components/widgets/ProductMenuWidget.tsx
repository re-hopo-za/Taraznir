


export default function ProductMenuWidget(){
    return(
        <div className="sidebar-widget-two trending-widget style-two">
            <div className="widget-content">
                <div className="content" style={{padding:0}}>
                    <div className="select-categories">
                        <div className="category">
                            <span className="arrow flaticon-down-arrow" />
                                Select catagories
                            <span className="icon flaticon-menu-3" style={{margin:0,padding:"5px 0"}} />
                        </div>
                        <ul className="categories-list">
                            <li className="active">
                                <a href="#">
                                    <span className="icon">
                                      <img src="images/icons/menu-icon-1.png" alt="" />
                                    </span>
                                    court cupboard
                                </a>
                            </li>
                            <li className="dropdown">
                                <a href="#">
                                    <span className="icon">
                                      <img src="images/icons/menu-icon-2.png" alt="" />
                                    </span>
                                    cockfighting chair
                                </a>
                                <ul>
                                    <li>
                                        <a href="services.html">Fruits</a>
                                    </li>
                                    <li className="dropdown">
                                        <a href="service-detail.html">Fresh Fruits</a>
                                        <ul>
                                            <li>
                                                <a href="#">Apple</a>
                                            </li>
                                            <li>
                                                <a href="#">Banana</a>
                                            </li>
                                            <li>
                                                <a href="#">Watermelon</a>
                                            </li>
                                        </ul>
                                        <div className="dropdown-btn">
                                            <span className="fa fa-angle-left" />
                                        </div>
                                    </li>
                                </ul>
                                <div className="dropdown-btn">
                                    <span className="fa fa-angle-left" />
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span className="icon">
                                      <img src="images/icons/menu-icon-3.png" alt="" />
                                    </span>
                                    platform rocker
                                </a>
                            </li>
                            <li className="dropdown">
                                <a href="#">
                                    <span className="icon">
                                      <img src="images/icons/menu-icon-4.png" alt="" />
                                    </span>
                                    chest of drawers
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">Pepsi</a>
                                    </li>
                                    <li>
                                        <a href="#">Coke</a>
                                    </li>
                                    <li>
                                        <a href="#">Red Bull</a>
                                    </li>
                                </ul>
                                <div className="dropdown-btn">
                                    <span className="fa fa-angle-left" />
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span className="icon">
                                      <img src="images/icons/menu-icon-5.png" alt="" />
                                    </span>
                                    dressing table
                                </a>
                            </li>
                            <li className="dropdown">
                                <a href="#">
                                    <span className="icon">
                                      <img src="images/icons/menu-icon-6.png" alt="" />
                                    </span>
                                    grandfather clock
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">Dried 01</a>
                                    </li>
                                    <li>
                                        <a href="#">Dried 02</a>
                                    </li>
                                    <li>
                                        <a href="#">Dried 03</a>
                                    </li>
                                </ul>
                                <div className="dropdown-btn">
                                    <span className="fa fa-angle-left" />
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span className="icon">
                                      <img src="images/icons/menu-icon-7.png" alt="" />
                                    </span>
                                    Pembroke table
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span className="icon">
                                      <img src="images/icons/menu-icon-8.png" alt="" />
                                    </span>
                                    Early American furniture
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span className="icon">
                                      <img src="images/icons/menu-icon-9.png" alt="" />
                                    </span>
                                    Shaker furniture
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    )
}
