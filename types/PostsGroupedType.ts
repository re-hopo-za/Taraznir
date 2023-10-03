import {PostType} from "./PostType";

export type PostsGroupedType = {
    grouped :{
        id          : number,
        title       : string,
        slug        : string,
        description : string,
        cover       : null,
        model       : string,
        project     : PostType[],
        blog        : PostType[],
        product     : PostType[],
        service     : PostType[],
    }[]
    items : PostType[]
}
