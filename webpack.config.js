// webpack.config.js
var Encore = require('@symfony/webpack-encore');
const CopyWebpackPlugin = require('copy-webpack-plugin');
var env = require('./env.json');

Encore
// the project directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath(env.publicPath)

    // will create web/build/app.js and web/build/app.css
    .addEntry('js/main', './app/Resources/assets/js/main.js')
    .addEntry('js/adminlte', './app/Resources/assets/js/adminlte.js')
    .addEntry('js/charts', './app/Resources/assets/js/charts.js')
    .addEntry('js/app', './app/Resources/assets/js/app.js')
    .addEntry('js/login', './app/Resources/assets/js/login.js')

    .enableVueLoader()

    .addStyleEntry('css/main', './app/Resources/assets/css/main.scss')
    .addStyleEntry('css/adminlte', './app/Resources/assets/css/adminlte.scss')
    .addStyleEntry('css/charts', './app/Resources/assets/css/charts.scss')
    .addStyleEntry('css/app', './app/Resources/assets/css/app.scss')
    .addStyleEntry('css/login', './app/Resources/assets/css/login.scss')
    .addStyleEntry('global', './app/Resources/assets/css/global.scss')

    // imgs
    .addPlugin(new CopyWebpackPlugin([
        // copies to {output}/static
        { from: './app/Resources/assets/img', to: 'img' }
    ]))

    // allow sass/scss files to be processed
    .enableSassLoader()
    .enableLessLoader()

    .autoProvidejQuery()

    .configureDefinePlugin((options) => {
    options.baseUrl = JSON.stringify(env.baseUrl);
})

.enableSourceMaps(!Encore.isProduction())

// empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // show OS notifications when builds finish/fail
    .enableBuildNotifications()

// create hashed filenames (e.g. app.abc123.css)
// .enableVersioning()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();