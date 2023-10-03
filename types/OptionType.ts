import {ImagesType} from "./ImagesType";
import {MetaType} from "./MetaType";

export type OptionType = {
    id                : number
    key               : string
    title             : string
    value             : string
    type              : string
    jalali_created_at : string
    images            : ImagesType
    meta              : MetaType[]
}