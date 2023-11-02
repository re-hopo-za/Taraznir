import {API_PATH ,cacheStatus} from "&/Helpers";
import {PostsType} from "^/PostsType";
import {PostType} from "^/PostType";
import {PostsParametersType} from "^/PostsParametersType";


export async function getBlogs(params:PostsParametersType ):Promise<PostsType> {
    return fetch( `${API_PATH}/blog?` + new URLSearchParams(params) ,{cache:cacheStatus } )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}

export async function getBlog( id:number ):Promise<PostType> {
    return fetch( `${API_PATH}/blog/` + id )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}