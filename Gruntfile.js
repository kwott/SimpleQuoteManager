/*jslint node: true */
module.exports = function (grunt) {
    'use strict';
    grunt.initConfig(
        {
            cssmin: {
                combine: {
                    files: {
                        'themes/sqm/css/main.css': ['themes/sqm/css/reset.css', 'themes/sqm/css/layout.css', 'themes/sqm/css/general.css', 'themes/sqm/css/grid.css', 'themes/sqm/css/messages.css', 'themes/sqm/css/pagination.css']
                    }
                }
            },
            watch: {
                styles: {
                    files: ['themes/sqm/css/*.css'],
                    tasks: ['cssmin']
                }
            },
            jslint: {
                Gruntfile: {
                    src: ['Gruntfile.js']
                }
            },
            csslint: {
                css: {
                    src: ['themes/sqm/css/*.css']
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
