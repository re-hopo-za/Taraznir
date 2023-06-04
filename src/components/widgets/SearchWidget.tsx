


export default function SearchWidget(){
    return(
        <div className="sidebar-widget-two search-box">
            <div className="widget-content">
                <form method="post" action="contact.html">

                    <div className="form-group" dir="rtl">
                        <button type="submit">
                            <span className="icon fa fa-search" />
                        </button>
                        <input
                            type="search"
                            name="search-field"
                            defaultValue=""
                            placeholder="Search Product"
                        />
                    </div>
                </form>
            </div>
        </div>
    )
}
