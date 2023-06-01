import { createSlice } from "@reduxjs/toolkit";

type ThemeState = {
    navStatus: boolean;
};

const initialState = {
    navStatus: false,
} as ThemeState;

export const themeSlice = createSlice({
    name: "theme",
    initialState,
    reducers: {
        reset: () => initialState,
        setNavStatus: (state, action) => {
            state.navStatus = !state.navStatus;
        },
    },
});

export const {
    setNavStatus,
    reset,
} = themeSlice.actions;
export default themeSlice.reducer;




