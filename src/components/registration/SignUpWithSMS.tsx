"use client";

import {object, string, setLocale, boolean, number} from 'yup';
import {useFormik} from 'formik';
import React, {JSX, MouseEventHandler, useState} from "react";
import {API_PATH} from "&/Helpers";
import { useRouter } from "next/navigation";


const mobileRegExp:RegExp = /^09\d{9}/

setLocale({
    mixed:{
        required :'فیلد اجباری میباشد. ' ,
    },
    string: {
        min: 'باید حداقل ${min} کارکتر باشد.',
        max: 'باید حداکثر ${max} کارکتر باشد.',
        email:'قالب ایمیل صحیح نمیباشد.'
    },
    number:{
        min: 'باید حداقل ${min} عدد باشد.',
        max: 'باید حداکثر ${max} عدد باشد.',
    },
    boolean:{
        isValue:'قوانین بایستی پذیرفته شود.'
    }
});


let userSchema = object({
    name: string().required().min(3).max(30),
    mobile: string().required().matches(mobileRegExp, 'شماره وراد شده صحیح نمیباشد.'),
    email: string().required().email(),
    password: string().required().min(8),
    accept: boolean().isTrue()
});


// @ts-ignore
export default function SignUpWithSMS({submit}): JSX.Element{
    const router = useRouter()
    const [fetching,setFetching ] = useState<boolean>(false);
    const [resultMessage,setResultMessage ] = useState<string>( '' );


    const formik = useFormik({
        initialValues: {
            name: '',
            mobile: '',
            email: '',
            password: '',
            accept: false,
        },
        validationSchema:userSchema,
        onSubmit: values => {
            setResultMessage('');
            registration(values).then( result => {
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
        urlencoded.append("mobile" ,values.mobile );
        urlencoded.append("password" ,values.password );
        urlencoded.append("name" ,values.name);

        return await fetch(`${API_PATH}auth/send-sign-up-code` ,{
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
           <div className="form-header">
               <h4>فرم ثبت نام</h4>
               {/*<button type="button" onClick={() => router.push('/registration?target=sign-in')}> ورود </button>*/}
           </div>
            <div className="form-group">
                <label>نام</label>
                <input
                    type="text"
                    name="name"
                    placeholder="مثلا:سیاوش بهرنگی"
                    onChange={formik.handleChange}
                    value={formik.values.name}
                    autoComplete="off"
                />
                {formik.touched.name && formik.errors.name ? (
                    <div className="error">{formik.errors.name}</div>
                ) : null}
            </div>
            <div className="form-group">
                <label>شماره موبایل</label>
                <input
                    dir="ltr"
                    type="text"
                    name="mobile"
                    placeholder="مثلا:09123456789"
                    onChange={formik.handleChange}
                    value={formik.values.mobile}
                    autoComplete="off"
                />
                {formik.touched.mobile && formik.errors.mobile ? (
                    <div className="error">{formik.errors.mobile}</div>
                ) : null}
            </div>
            <div className="form-group">
                <label>نشانی ایمیل</label>
                <input
                    dir="ltr"
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
                    dir="ltr"
                    type="password"
                    name="password"
                    placeholder="حداقل هشت کاراکتر"
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
                        name="accept"
                        id="type-1"
                        onChange={formik.handleChange}
                    />
                    <label htmlFor="type-1" style={{paddingRight:20}}>
                        شرایط <a href="/" target="_blank"> تاراز نیر </a>
                        را میپزیرم.
                    </label>
                    {formik.touched.accept && formik.errors.accept ? (
                        <div className="error">{formik.errors.accept}</div>
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
                        ثبت نام
                    </button>
                }
            </div>
        </form>
    )
}


