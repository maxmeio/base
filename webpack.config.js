const path = require('path');
const webpack = require('webpack');
const CopyWebpackPlugin = require('copy-webpack-plugin');
var ImageminPlugin = require('imagemin-webpack-plugin').default
var WebpackNotifierPlugin = require('webpack-notifier');

module.exports = {
  mode: 'development',
  entry: ['./src/js/app.js', './src/scss/app.scss'],
  output: {
    filename: 'js/app.js',
    path: path.resolve(__dirname, './public')
  },
  module: {
      rules: [{
          test: /\.scss$/,
          use: [
            {
              loader: 'file-loader',
              options: {
                name: 'css/[name].css'
              }              
            },
            {
              loader: 'extract-loader'
            },
            {
              loader: 'css-loader?-url'
            },
            {
              loader: 'postcss-loader'
            },
            {
              loader: 'sass-loader'
            }
          ]
      }]
  },
  devServer: {
    contentBase: path.join(__dirname, './public'),
    compress: true,
    port: 9000
  },
  plugins: [
    new ImageminPlugin({
      disable: process.env.NODE_ENV !== 'production', // Disable during development
      pngquant: {
        quality: '50-100'
      }
    }),
    new CopyWebpackPlugin([
      {
        from: 'src/images',
        to: 'images/min'
      }
    ]),
    new ImageminPlugin({ test: /\.(jpe?g|png|gif|svg)$/i }),
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
      "window.jQuery": "jquery"
    }),
    new WebpackNotifierPlugin({
      alwaysNotify: true
    })
  ],

};