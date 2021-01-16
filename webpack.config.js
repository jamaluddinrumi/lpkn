const path = require("path");

module.exports = {
    resolve: {
        alias: {
            "@": path.resolve("resources/js")
        }
    },
    module: {
        rules: [
            {
                test: /\.s(c|a)ss$/,
                use: [
                    "vue-style-loader",
                    "css-loader",
                    {
                        loader: "sass-loader",
                        // Requires sass-loader@^8.0.0
                        options: {
                            implementation: require("sass"),
                            sassOptions: {
                                indentedSyntax: false // optional
                            }
                        }
                    }
                ]
            }
        ]
    }
};
