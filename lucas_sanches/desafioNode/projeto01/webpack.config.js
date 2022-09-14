const path = require('path')
const HtmlWebpackPlugin = require('html-webpack-plugin')

const isDevelopment = process.env.NODE !== 'production'

module.exports = {
    mode: isDevelopment ? 'development' : 'production',
    devtool: isDevelopment ? 'eval-source-map' : 'source-map',
    entry: path.resolve(__dirname, 'index.jsx'),//
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    resolve: {
        extensions: ['.js', '.jsx']
    },
    devServer: {
        static: {
            directory: path.resolve(__dirname, 'public/')
        },
        port: 3000
    },
    plugins: [
        new HtmlWebpackPlugin({
            template:
                path.resolve(__dirname, 'public', 'index.html')
        })
    ],
    module: {
        rules: [
            {//o dolar quer dizer que estamos buscando todos os arquivos que terminam com jsx
                test: [/\.jsx$/, /\.js$/],
                exclude: /node_modules/,
                use: 'babel-loader'
            },
            {
                test: [/\.css$/],
                exclude: /node_modules/,
                use: ['style-loader', 'css-loader']
            },
            {
                test: /\.(png|jpg|jpeg|gif)$/,
                exclude: /node_modules/,
                use: [{
                    loader: 'file-loader'
                }]
            }
        ]
    }

}