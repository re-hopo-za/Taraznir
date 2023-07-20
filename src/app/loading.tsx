'use client';

import {useEffect, useState} from "react";

export default function Loading() {


    const [mounted, setMounted] = useState(false);
    useEffect(() => {
        setMounted(true)
    }, [])


    return mounted && (
        <div className="loader-wrap">
            <div className="preloader">
                <div className="preloader-close">x</div>
                <div id="handle-preloader" className="handle-preloader">
                    <div className="animation-preloader">
                        <div className="spinner" />
                        <div className="txt-loading">
                            <span data-text-preloader="B" className="letters-loading">
                            B
                            </span>
                            <span data-text-preloader="L" className="letters-loading">
                            L
                            </span>
                            <span data-text-preloader="O" className="letters-loading">
                            O
                            </span>
                            <span data-text-preloader="X" className="letters-loading">
                            X
                            </span>
                            <span data-text-preloader="I" className="letters-loading">
                            I
                            </span>
                            <span data-text-preloader="C" className="letters-loading">
                            C
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
