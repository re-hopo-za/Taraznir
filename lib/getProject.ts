import {API_PATH, cacheStatus} from "&/Helpers";
import {PostType} from "^/PostType";
import {PostsGroupedType} from "^/PostsGroupedType";
import {PostsParametersType} from "^/PostsParametersType";



export async function getProjects(params:PostsParametersType ):Promise<PostsGroupedType> {
    return fetch( `${API_PATH}/project?` + new URLSearchParams(params) ,{cache:cacheStatus } )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}

export async function getProject( id:number ):Promise<PostType> {
    return fetch( `${API_PATH}/project/` + id )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}