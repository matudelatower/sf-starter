// webpack.config.js
var Encore = require('@symfony/webpack-encore');

var env = require('./env.json');

Encore
// the project directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath(env.publicPath)

    // will create web/build/app.js and web/build/app.css
    .addEntry('pre-js', './app/Resources/assets/js/pre.js')
    .addEntry('common-js', './app/Resources/assets/js/common.js')
    .addEntry('app', './app/Resources/assets/js/main.js')

    .enableVueLoader()

    .addStyleEntry('common-style', './app/Resources/assets/css/common.scss')
    .addStyleEntry('global', './app/Resources/assets/css/global.scss')

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