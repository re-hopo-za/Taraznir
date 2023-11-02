import {API_PATH, cacheStatus} from "&/Helpers";
import {OptionType} from "^/OptionType";

export async function getOptions(key:string ):Promise<OptionType[]> {
    return fetch( `${API_PATH}/option/` + key ,{cache:cacheStatus } )
        .then( response => response.json())
        .then( result => result)
        .catch( e => console.log(e));
}