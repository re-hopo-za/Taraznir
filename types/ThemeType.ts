import {OptionType} from "^/OptionType";

type  MenuItemType = {
    label:string
    type: string
    data: {
        target: string
        url: string
    },
    children: MenuItemType[]
}

type MenuType = {
    id: number,
    name: string,
    handle: string,
    items: MenuItemType[],
}

export type ThemeType = {
    header_menu: MenuType
    first_footer_menu: MenuType
    second_footer_menu: MenuType
    third_footer_menu: MenuType
    theme_settings: OptionType
}