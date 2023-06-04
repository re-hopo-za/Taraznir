
export default function Pagination (){
    return(
        <ul className="styled-pagination text-center">
            <li className="next">
                <a href="#">
                    <span className="fa fa-angle-double-left"/>
                </a>
            </li>
            <li>
                <a href="#" className="active">
                    1
                </a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li className="next">
                <a href="#">
                    <span className="fa fa-angle-double-right"/>
                </a>
            </li>
        </ul>
    )
}
