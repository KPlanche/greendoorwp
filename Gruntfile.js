 module.exports = function(grunt) {

         // Project configuration.
         grunt.initConfig({
             pkg: grunt.file.readJSON('package.json'),
             
             // Configuration options for Sass
             sass: {
                     dist: {
                             options: {
                                     includePaths: ['imports/are/here/'],
                                     outputStyle: 'nested'
                             },
                             files: {
                                     'main.css': 'main.scss'
                             }
                     }
             }
         });

         // Load the task plugins
         grunt.loadNpmTasks('grunt-sass');
         grunt.loadNpmTasks('grunt-watch');
         grunt.loadNpmTasks('grunt-jshint');
         grunt.loadNpmTasks('grunt-autoprefix');
         grunt.loadNpmTasks('grunt-cssmin');
         grunt.loadNpmTasks('grunt-uglify');
         grunt.loadNpmTasks('grunt-newer');
         grunt.loadNpmTasks('grunt-imagemin');
         grunt.loadNpmTasks('grunt-jade');
         grunt.loadNpmTasks('grunt-svginject');

         // Define Tasks.
         grunt.registerTask('default', ['sass', 'watch', 'jshint', 'autoprefix', 'cssmin', 'uglify', 'newer', 'imagemin', 'jade', 'svginject']);

 };