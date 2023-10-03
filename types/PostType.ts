import {ImagesType} from "./ImagesType";
import {CategoryType} from "./CategoryType";
import {MetaType} from "./MetaType";

export type PostType = {
    id                : number
    title             : string
    tag               : string
    slug              : string
    content           : string
    summary           : string
    thumbnail         : string
    status            : string
    chosen            : number
    jalali_created_at : string
    images            : ImagesType[]
    category          : CategoryType[]
    meta              : MetaType[]
}
