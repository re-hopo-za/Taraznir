import {RequestCache} from "^/MiscType";
import {ThemeType} from "^/ThemeType";
import {OptionType} from "^/OptionType";
import {MetaType} from "^/MetaType";
import {keys} from "lodash-es";

export const cacheStatus :RequestCache  = "force-cache"


export const API_PATH = 'http://tara.dev/api';


export const isNumeric = (str: any ):boolean => {
    if (typeof str != "string") return false
    return !isNaN(Number(str)) && !isNaN(parseFloat(str))
}

export const numberToPersian = ( number: any ,separator :boolean = true ) => {
    const persian = { 0: '۰', 1: '۱', 2: '۲', 3: '۳', 4: '۴', 5: '۵', 6: '۶', 7: '۷', 8: '۸', 9: '۹' ,',' :',' };
    number = number.toString().split('');
    // @ts-ignore
    number = number.map( ( i: string ,key:string)  => persian[number[key]] );
    return number.join('');
}

export const separator = ( num: any ):string => {
    return num ? Number(num).toLocaleString() : '';
}


export const setCookie = (name :string ,value: any ,days :number) :void => {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

export const getCookie = (name :string) :string|null => {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for(let i=0;i < ca.length;i++) {
        let c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

export const eraseCookie = (name :string) :void => {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}




export const returnValueIsTrue = ( data:any ,index:any ,value:any ,$default = '' ) => {
    if ( Array.isArray(data) && data[index] !== undefined )
        return value;

    return $default;
}

export const checkCurrentPage = ( currentPage:string ,page:string ) => {

    if ( page == `/${currentPage}`  || page == currentPage )
        return 'current-menu-item';

    return ''
}



export const menuCreator = (options:ThemeType ,key:string ,containerClass :string ) =>{
    console.log(options)
    if( typeof options[key] === 'undefined' || !options[key].items)
        return <></>

    const items:object[]    = options[key].items
    const menuKeys:string[] = Object.keys(items)

    return(
        <ul className={containerClass} dir="rtl">
            {menuKeys.map((item:string ,key:number) =>
                <li key={key} className={`${!Array.isArray(items[item]['children']) ? `dropdown` :``} ${checkCurrentPage('/' ,items[item] && items[item]['data']?.['url'])}` }>
                    {items[item].data && <a href={items[item]['data']?.['url']} target={items[item]['data']?.['target']} >{items[item]['label'] }</a>}
                    { !Array.isArray(items[item]['children']) &&
                        <ul>
                            {Object.keys(items[item]['children']).map((firstChild:any ,firstKey:number) =>
                                <li key={firstKey} className={`${!Array.isArray(items[item]['children'][firstChild]['children']) ? `dropdown` : ``}`}>
                                    {<a href={items[item]['children'][firstChild]['data']?.['url']} target={items[item]['children'][firstChild]['data']?.['target']} >{items[item]['children'][firstChild]['label'] }</a>}
                                    { !Array.isArray(items[item]['children'][firstChild]['children']) &&
                                        <ul>
                                            {Object.keys(items[item]['children'][firstChild]['children']).map((secondChild:any ,secondKey:number) =>
                                                <li key={secondKey}  className={`${!Array.isArray(items[item]['children'][firstChild]['children'][secondChild]['children']) ? `dropdown` : ``}`}>
                                                    {<a href={items[item]['children'][firstChild]['children'][secondChild]['data']?.['url']} target={items[item]['children'][firstChild]['children'][secondChild]['data']?.['target']} >{items[item]['children'][firstChild]['children'][secondChild]['label'] }</a>}
                                                    { !Array.isArray(items[item]['children'][firstChild]['children'][secondChild]['children']) &&
                                                        <ul>
                                                            {Object.keys(items[item]['children'][firstChild]['children'][secondChild]['children']).map((thirdChild:any ,thirdKey:number) =>
                                                                <li key={thirdKey}>
                                                                    {<a href={items[item]['children'][firstChild]['children'][secondChild]['children'][thirdChild]['date']?.['url']}
                                                                        target={items[item]['children'][firstChild]['children'][secondChild]['children'][thirdChild]['date']?.['target']} >
                                                                        {items[item]['children'][firstChild]['children'][secondChild]['children'][thirdChild]['date']['label'] }
                                                                    </a>}
                                                                </li>
                                                            )}
                                                        </ul>
                                                    }
                                                </li>
                                            )}
                                        </ul>
                                    }
                                </li>
                            )}
                        </ul>
                    }
                </li>
            )}
        </ul>
    )
}

export const findMetaValueByKey = ( metas:MetaType[] ,key:string ) => {
    return (metas.find( (meta:MetaType) => meta.key === key))?.value
}

export const filterMetaByKy = ( metas:MetaType[] ,key:string ) => {
    return metas.filter( (meta:MetaType) => meta.key === key)
}

export const searchMetaByKeyword = ( metas:MetaType[] ,keyword:string ) => {
    return metas.filter( (meta:MetaType) => meta.key.indexOf(keyword) >= 0 )
}

export const isJsonString = (str:string) =>  {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

