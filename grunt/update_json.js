/**
 * + Task config: Update json
 * https://github.com/andreaspizsa/grunt-update-json
 * =====================================================================
 */
module.exports = {

    // package.json data into bower.json
    bower: {
        src: 'package.json',
        dest: 'bower.json',
        fields: [
            'name',
            'description',
            'version',
            'homepage',
            'repository',
            'license',
            'private'
        ]
    }

};
/* = Task config: Update json */
