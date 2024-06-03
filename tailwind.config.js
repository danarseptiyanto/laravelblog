/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ["Inter"],
        },
        extend: {
            screens: {
                "2xl": { max: "1535px" },
                // => @media (max-width: 1535px) { ... }

                xl: { max: "1370px" },
                // => @media (max-width: 1279px) { ... }

                lg: { max: "1023px" },
                // => @media (max-width: 1023px) { ... }

                md: { max: "767px" },
                // => @media (max-width: 767px) { ... }

                sm: { max: "639px" },
                // => @media (max-width: 639px) { ... }
            },
            fontFamily: {
                inter: ["Inter"],
            },
            maxWidth: {
                main: "1240px",
            },
            colors: {
                main: "#222222",
                secondary: "#FC4951",
                background: "#F8F8F8",
                stroke: "#EBEBEB",
                drkmain: "#0B1121",
                drksecondary: "#1E293B",
                drktext: "#94A3B8",
                drkborder: "#282E3F",
            },
        },
    },
    plugins: [],
};
