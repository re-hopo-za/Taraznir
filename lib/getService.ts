import {API_PATH ,cacheStatus} from "&/Helpers";
import {PostsType} from "^/PostsType";
import {PostType} from "^/PostType";
import {PostsParametersType} from "^/PostsParametersType";


export async function getServices( params:PostsParametersType ):Promise<PostsType> {
    return fetch( `${API_PATH}/service?` + new URLSearchParams(params) ,{cache:cacheStatus } )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}

export async function getService( slug:string|string[]|undefined ):Promise<PostType> {
    return fetch( `${API_PATH}/service/` + slug )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}