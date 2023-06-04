'use client'

import React, { useState, useCallback } from 'react';
import ImageViewer from 'react-simple-image-viewer';

export default function GalleryWidget() {
    const [currentImage, setCurrentImage] = useState(0);
    const [isViewerOpen, setIsViewerOpen] = useState(false);
    const images = [
        '/images/gallery/gl1.png',
        '/images/gallery/gl2.png',
        '/images/gallery/gl3.png',
        '/images/gallery/gl4.png',
        '/images/gallery/gl5.png',
        '/images/gallery/gl6.png',
    ];

    // @ts-ignore
    const openImageViewer = useCallback((index) => {
        setCurrentImage(index);
        setIsViewerOpen(true);
    }, []);

    const closeImageViewer = () => {
        setCurrentImage(0);
        setIsViewerOpen(false);
    };

    return (

     <div className="sidebar-widget-two gallery-widget style-two">
            <div className="sidebar-title-two">
                <h5>Gallery</h5>
            </div>
            <div className="widget-content">
                <div className="content">

                    <ul className="zoom-gallery">
                        {images.map((src, index) => (

                            <li key={ index }>
                                <div onClick={ () => openImageViewer(index) }>
                                    <img
                                        src={ src }

                                        width="300"
                                        alt=""
                                    />
                                </div>
                            </li>
                        ))}
                    </ul>
                </div>
            </div>


            {isViewerOpen && (
                <ImageViewer
                    src={ images }
                    currentIndex={ currentImage }
                    disableScroll={ false }
                    closeOnClickOutside={ true }
                    onClose={ closeImageViewer }
                    backgroundStyle={{zIndex:999}}
                />
            )}
        </div>
    );
}
