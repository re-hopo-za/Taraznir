import {API_PATH, cacheStatus} from "&/Helpers";
import {PostsType} from "^/PostsType";
import {PostType} from "^/PostType";

type StandardsParamType = {
    keyword   ?: string,
    limit     ?: string,
    orderBy   ?: string,
    direction ?: string,
}


export async function getStandards( params:StandardsParamType ):Promise<PostsType> {
    return fetch( `${API_PATH}/standard?` + new URLSearchParams(params) ,{cache:cacheStatus } )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}

export async function getStandard( id:number ):Promise<PostType> {
    return fetch( `${API_PATH}/standard/` + id )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}