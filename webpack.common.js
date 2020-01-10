const autoprefixer = require('autoprefixer');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');
const isDevelopment = process.env.NODE_ENV === 'development';
const CopyWebpackPlugin = require('copy-webpack-plugin');
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');


module.exports = {
    entry: ['./src/js/main.js', './src/scss/style.scss'],
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'js/main.min.js',
    },
    module: {
        rules: [{
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader"
            },
            {
                test: /\.s?css$/,
                use: [
                    isDevelopment ? 'style-loader' : MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            sourceMap: isDevelopment
                        }
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            plugins: () => [autoprefixer],
                            sourceMap: isDevelopment
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: isDevelopment
                        },
                    },
                ]
            },
            {
                test: /\.(eot|ttf|woff|woff2)$/,
                loader: 'file-loader',
                options: {
                    name: './fonts/[name].[hash].[ext]'
                }
            },
            {
                test: /\.(jpe?g|png|gif|svg)(\?[a-z0-9=.]+)?$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        outputPath: './images/'
                    }
                }]
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin(),
        new CopyWebpackPlugin([{
            from: 'src/images',
            to: 'images',
        }]),
        new SVGSpritemapPlugin(
            'src/images/components/icons/**/*.svg', {
                output: {
                    filename: 'images/sprite.svg'
                }
            })
    ]
}