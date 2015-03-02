/*jslint node: true */
module.exports = function (grunt) {
    'use strict';
    grunt.initConfig(
        {
            cssmin: {
                mcb: {
                    files: {
                        'themes/mcb/css/main.css': ['themes/mcb/css/reset.css', 'themes/mcb/css/layout.css', 'themes/mcb/css/general.css', 'themes/mcb/css/grid.css', 'themes/mcb/css/messages.css', 'themes/mcb/css/pagination.css']
                    }
                }
            },
            watch: {
                mcb: {
                    files: ['themes/mcb/css/*.css'],
                    tasks: ['cssmin']
                }
            },
            jslint: {
                Gruntfile: {
                    src: ['Gruntfile.js']
                }
            },
            csslint: {
                mcb: {
                    src: ['themes/mcb/css/*.css']
                }
            }
        }
    );

    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-jslint');
    grunt.loadNpmTasks('grunt-contrib-csslint');

    grunt.registerTask('default', ['cssmin']);
    grunt.registerTask('lint', ['jslint', 'csslint']);
};
