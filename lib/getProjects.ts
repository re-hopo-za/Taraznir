import {API_PATH, cacheStatus} from "&/Helpers";
import {PostType} from "^/PostType";
import {PostsGroupedType} from "^/PostsGroupedType";

type ProjectsParamType = {
    keyword    ?: string,
    limit      ?: string,
    orderBy    ?: string,
    direction  ?: string,
    notIn      ?: string,
    byCategory ?: string
}


export async function getProjects( params:ProjectsParamType ):Promise<PostsGroupedType> {
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