"use client";

import {object, string, setLocale, boolean} from 'yup';
import {useFormik} from 'formik';
import React, {JSX, useState} from "react";
import {API_PATH} from "&/Helpers";


setLocale({
    mixed:{
        required :'فیلد اجباری میباشد. ' ,
    },
    string: {
        min: 'باید حداقل ${min} کارکتر باشد.',
        max: 'باید حداکثر ${max} کارکتر باشد.',
        email:'قالب ایمیل صحیح نمیباشد.'
    },
    boolean:{
        isValue:'قوانین بایستی پذیرفته شود.'
    }
});


let userSchema = object({
    email: string().required().email(),
    password: string().required().min(8),
    remember: boolean().optional()
});


export default function SignInWithSMS({submit}:any ): JSX.Element{
    const [fetching,setFetching ] = useState<boolean>( false );
    const [resultMessage,setResultMessage ] = useState<string>( '' );
    const formik = useFormik({
        initialValues: {
            email: '',
            password: '',
            remember: false,
        },
        validationSchema:userSchema,
        onSubmit: values => {
            setResultMessage('');
            registration(values).then( result =>{
                if ( result.status ) {
                    submit(values);
                }else{
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
    async function registration( values  ){
        setFetching( true );
        const myHeaders = new Headers();
        myHeaders.append("X-Requested-With", "XMLHttpRequest");
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

        const urlencoded = new URLSearchParams();
        urlencoded.append("email" ,values.email );
        urlencoded.append("password" ,values.password );

        return await fetch(API_PATH+"auth/send-sign-in-code" ,{
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
            <h4>فرم ورود</h4>
            <div className="form-group">
                <label>نشانی ایمیل</label>
                <input
                    type="text"
                    name="email"
                    placeholder="مثلا:info@taraznir.com"
                    onChange={formik.handleChange}
                    value={formik.values.email}
                    autoComplete="off"
                />
                {formik.touched.email && formik.errors.email ? (
                    <div className="error">{formik.errors.email}</div>
                ) : null}
            </div>
            <div className="form-group">
                <label>گذرواژه</label>
                <input
                    type="password"
                    name="password"
                    placeholder="گذرواژه"
                    onChange={formik.handleChange}
                    value={formik.values.password}
                    autoComplete="off"
                />
                {formik.touched.password && formik.errors.password ? (
                    <div className="error">{formik.errors.password}</div>
                ) : null}
            </div>
            <div className="form-group">
                <div className=" form-group check-box" dir="rtl">
                    <input
                        type="checkbox"
                        name="remember"
                        id="type-1"
                        onChange={formik.handleChange}
                    />
                    <label htmlFor="type-1" style={{paddingRight:20}}>
                        به خاطر بسپار
                    </label>
                    {formik.touched.remember && formik.errors.remember ? (
                        <div className="error">{formik.errors.remember}</div>
                    ) : null}
                </div>
                <div className="error">{resultMessage}</div>
            </div>
            <div className="form-group d-flex justify-content-center">
                { fetching ?
                    <button style={{background:"#aaa"}} className="submit-form-btn theme-btn btn-style-one" disabled>
                        در حال دریافت اطلاعات
                    </button>
                    :
                    <button type="submit" className="submit-form-btn theme-btn btn-style-one" >
                        وارد شوید
                    </button>
                }
            </div>
        </form>
    )
}

