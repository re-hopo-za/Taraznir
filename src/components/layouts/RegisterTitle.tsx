
interface IProps {
    url: string,
    title: string,
}



const RegisterTitle = ({url ,title } :IProps) => {

    return(
        <section className="page-title-two" style={{minHeight:500 ,marginBottom:0}}>
            <div className="auto-container">
            </div>
        </section>
    )
}

export default RegisterTitle;



