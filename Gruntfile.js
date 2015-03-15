/*jslint node: true */
module.exports = function (grunt) {
    'use strict';
    grunt.initConfig(
        {
            cssmin: {
                mcb: {
                    files: {
                        'themes/mcb/css/main.css': ['themes/mcb/css/reset.css', 'themes/mcb/css/layout.css', 'themes/mcb/css/general.css', 'themes/mcb/css/grid.css', 'themes/mcb/css/messages.css', 'themes/mcb/css/pagination.css', 'themes/mcb/css/navigation.css']
                    }
                }
            },
            watch: {
                mcb: {
                    files: ['themes/mcb/css/*.css', '!themes/mcb/css/main.css'],
                    tasks: ['cssmin']
                },
                kwott: {
                    files: ['themes/kwott/scss/*.scss'],
                    tasks: ['sass']
                }
            },
            jslint: {
                Gruntfile: {
                    src: ['Gruntfile.js']
                }
            },
            csslint: {
                mcb: {
                    src: ['themes/mcb/css/*.css', '!themes/mcb/css/main.css']
                }
            },
            sass: {
                kwott: {
                    options: {
                        style: 'compressed'
                    },
                    files: {
                        'themes/kwott/css/main.css': 'themes/kwott/scss/main.scss'
                    }
                }
            }
        }
    );

    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-jslint');
    grunt.loadNpmTasks('grunt-contrib-csslint');
    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('default', ['cssmin', 'sass']);
    grunt.registerTask('lint', ['jslint', 'csslint']);
};
