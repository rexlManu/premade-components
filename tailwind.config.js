const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.ts",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#f3f8fd",
                    100: "#e6f1fa",
                    200: "#c1dbf3",
                    300: "#9bc5ec",
                    400: "#519ade",
                    500: "#066ed0",
                    600: "#0563bb",
                    700: "#05539c",
                    800: "#04427d",
                    900: "#033666",
                },
            },
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
