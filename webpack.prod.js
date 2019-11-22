const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const merge = require('webpack-merge');
const commonConfig = require('./webpack.common.js');


module.exports = merge(commonConfig, {
    mode: 'production',
    optimization: {
        minimize : true,
        minimizer: [new TerserPlugin(), new OptimizeCSSAssetsPlugin({})],
    },
    plugins: [
        new CleanWebpackPlugin(),
    ]
});