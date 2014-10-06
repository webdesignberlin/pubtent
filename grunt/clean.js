/**
 * + Task Config: Clean
 * https://github.com/gruntjs/grunt-contrib-clean
 * =====================================================================
 */
module.exports = {

    // temporary files
    temp: [
        '<%= globalConfig.temp %>'
    ],

    // auto-installed dependencies / vendor folders
    deps: [
        '<%= globalConfig.assets %>/js/vendor/**/*',
        '<%= globalConfig.assets %>/css/vendor/**/*',
        '<%= globalConfig.assetsDev %>/js/vendor/**/*',
        '<%= globalConfig.assetsDev %>/scss/vendor/**/*'
    ]

};
/* = Task Config: Clean */
