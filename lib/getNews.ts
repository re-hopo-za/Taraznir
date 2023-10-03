import {API_PATH, cacheStatus} from "&/Helpers";
import {PostsType} from "^/PostsType";
import {PostType} from "^/PostType";

type NewsParamType = {
    keyword    ?: string,
    limit      ?: string,
    orderBy    ?: string,
    direction  ?: string,
    notIn      ?: string,
    byCategory ?: string
}


export async function getNewses( params:NewsParamType ):Promise<PostsType> {
    return fetch( `${API_PATH}/news?` + new URLSearchParams(params) ,{cache:cacheStatus } )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}

export async function getNews( id:number ):Promise<PostType> {
    return fetch( `${API_PATH}/news/` + id )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}