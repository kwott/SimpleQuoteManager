/*jslint node: true */
module.exports = function (grunt) {
    'use strict';
    grunt.initConfig({
        cssmin: {
            combine: {
                files: {
                    'assets/style/dist/main.css': ['assets/style/css/reset.css', 'assets/style/css/layout.css', 'assets/style/css/general.css', 'assets/style/css/grid.css', 'assets/style/css/messages.css', 'assets/style/css/pagination.css']
                }
            }
        },
        watch: {
            styles: {
                files: ['assets/style/css/*.css'],
                tasks: ['cssmin']
            }
        },
        jslint: {
            Gruntfile: {
                src: ['Gruntfile.js']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-jslint');

    grunt.registerTask('default', ['cssmin']);
    grunt.registerTask('lint', ['jslint']);
};
