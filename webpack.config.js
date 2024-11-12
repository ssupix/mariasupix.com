const path = require('path');
// fs = file system
const fs = require('fs');
// imports webpack
const webpack = require('webpack');

module.exports = {
    entry: {
        global: ['./js/smooth.js', './js/cursor.js', './js/nav.js', './js/tippy.js', './js/sayhi.js', './js/scroll.js'],
        home: ['./js/banner.js', './js/scramble.js', './js/spinner.js'],
        work: ['./js/filter.js', './js/viewtoggle.js', './js/dropdown.js', './js/projects.js'],
        about: ['./js/drag.js', './js/flickity.js'],
        project: ['./js/moreprojects.js', './js/dropdown.js', './js/highlight.js'],
    },
    // configures webpack to output the file 'bundle.js' to the 'dist' folder
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: '[name].js',
        // cleans the dist folder before each build
        clean: true,
    },
    mode: 'production',

    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        // ensures ES6+ syntax is compatible with older browsers
                        presets: ['@babel/preset-env'],
                    },
                },
            },
        ],
    },

    // seperates all dependencies from the main bundle
    optimization: {
        splitChunks: {
            cacheGroups: {
                vendor: {
                    test: /[\\/]node_modules[\\/]/,
                    name: 'vendors',
                    chunks: 'all',
                },
            },
        },
    },
}