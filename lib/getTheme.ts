import {API_PATH, cacheStatus} from "&/Helpers";
import {ThemeType} from "^/ThemeType";


export async function getTheme( key:string ):Promise<ThemeType> {
    return fetch( `${API_PATH}/option/` + key ,{cache:cacheStatus } )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}