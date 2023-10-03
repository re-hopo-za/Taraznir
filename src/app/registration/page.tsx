'use client';

import Header from "@/layouts/Header";
import Sidebar from "@/layouts/Sidebar";
import Footer from "@/layouts/Footer";
import RegisterTitle from "@/layouts/RegisterTitle";
import {ReadonlyURLSearchParams, useSearchParams} from "next/navigation";
import SignUpWithSMS from "@/registration/SignUpWithSMS";
import Confirm from "@/registration/Confirm";
import {useState} from "react";
import SignInWithEmail from "@/registration/SignInWithEmail";
import SignInWithEmailPass from "@/registration/SignInWithEmailPass";
import SignUpWithEmail from "@/registration/SignUpWithEmail";
import SignInWithSMS from "@/registration/SignInWithSMS";
import SignInWithMobilePass from "@/registration/SignInWithMobilePass";

type User = {
    email:string,
    name:string,
    mobile:string,
    password:string,
    accept:boolean
};


export default function Registration( ){
    const searchParams:ReadonlyURLSearchParams = useSearchParams()
    const target:string|null = searchParams.get('target');
    const [form,setForm ] = useState<string|null>(target);
    const [user,setUser ] = useState<User>( );


    const submitSignUp = ( values: User ) =>{
        setUser(values);
        setForm('confirm');
    }

    const submitSignIn = ( values: User) =>{
        setUser(values);
        setForm('confirm');
    }

    const submitConfirm = ( user:object ,result: object) =>{
        console.log(user ,result)
        // setCookie('__token',values,7);
    }
    const formUI =
        form === 'sign-up-with-sms' ? <SignUpWithSMS submit={submitSignUp} /> :
            form === 'sign-up-with-email' ? <SignUpWithEmail submit={submitSignUp} /> :
                form === 'sign-in-with-sms' ? <SignInWithSMS submit={submitSignIn} /> :
                    form === 'sign-in-with-email' ? <SignInWithEmail submit={submitSignIn} /> :
                        form === 'sign-in-with-mobile-pass' ? <SignInWithMobilePass submit={submitSignIn} /> :
                            form === 'sign-in-with-email-pass' ? <SignInWithEmailPass submit={submitSignIn} /> :
                                form === 'confirm' ? <Confirm user={user} submit={submitConfirm} /> :''
    return (
        <div className="page-wrapper">
            <Header/>
            <RegisterTitle url={"sign-in"} title={"ورود"}/>
            <div className="register-section">
                <div className="auto-container">
                    <div className="inner-container">
                        <div className="row clearfix justify-content-center">
                            <div className="column col-lg-6 col-md-6 col-sm-12">
                                {
                                    formUI
                                }
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <Sidebar/>
            <Footer/>
        </div>
    )
}


