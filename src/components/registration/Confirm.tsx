"use client";

import {object, setLocale, number} from 'yup';
import {useFormik} from 'formik';
import React, {JSX, useState} from "react";
import {API_PATH} from "&/Helpers";

setLocale({
    mixed:{
        required :'فیلد اجباری میباشد. ' ,
    }
});
type Props = {
    user: {
        email:string,
        name:string,
        mobile:string,
        password:string,
    }|undefined,
    submit:any
};


let userSchema = object({
    code: number().min(4 ,'حداقل چهار عدد.'),
});


export default function Confirm({submit,user}:Props) {
    console.log(submit,user)
    const [fetching,setFetching ] = useState<boolean>( false );
    const [resultMessage,setResultMessage ] = useState<string>( '' );
    const formik = useFormik({
        initialValues: {
            code: ''
        },
        validationSchema:userSchema,
        onSubmit: values => {
            setResultMessage('');
            registration(user ,values).then( result =>{
                if ( result.status ) {
                    submit( user ,result );
                }
                else{
                    setResultMessage(result.message);
                }
                setFetching( false );
            }).catch(error=>{
                setFetching( false );
                alert('خطای سرور!');
            })
        },
    });


    // @ts-ignore
    async function registration( user ,values  ){
        console.log(user ,values)
        setFetching( true );
        const myHeaders = new Headers();
        myHeaders.append("X-Requested-With", "XMLHttpRequest");
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

        const urlencoded = new URLSearchParams();
        urlencoded.append("code" ,values.code );
        urlencoded.append("name" ,user.name );
        urlencoded.append("email" ,user.email );
        urlencoded.append("password" ,user.password );
        urlencoded.append("accept" ,user.accept );
        urlencoded.append("mobile" ,user.mobile );

        return await fetch(API_PATH+"auth/verify/sign-in-by-mobile-and-password" ,{
            method: 'POST',
            headers: myHeaders,
            body: urlencoded,
            redirect: 'follow'
        })
            .then(response => response.json())
            .then(result => result)
            .catch(error => error);
    }


    return (
        <form className="styled-form" onSubmit={formik.handleSubmit}>
            <h4>تایید موبایل</h4>
            <div className="form-group">
                <label>کد به شماره
                    <b> {user?.mobile} </b>
                    ارسال شد.</label>
                <input
                    type="number"
                    name="code"
                    placeholder="کد ارسالی"
                    onChange={formik.handleChange}
                    value={formik.values.code}
                    autoComplete="off"
                />
                {formik.touched.code && formik.errors.code ? (
                    <div className="error">{formik.errors.code}</div>
                ) : null}
                <div className="error">{resultMessage}</div>
            </div>
            <div className="form-group d-flex justify-content-center">
                { fetching ?
                    <button style={{background:"#aaa"}} className="submit-form-btn theme-btn btn-style-one" disabled>
                        در حال دریافت اطلاعات
                    </button>
                    :
                    <button type="submit" className="submit-form-btn theme-btn btn-style-one" >
                        تایید
                    </button>
                }
            </div>
        </form>
    )
}

