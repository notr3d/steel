'use strict';
 
module.exports = function (grunt) {
    // load all grunt tasks
    grunt.loadNpmTasks('grunt-contrib-less');
    //grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    grunt.initConfig({
        less: {
            // production config is also available
            development: {
                options: {
                    // Specifies directories to scan for @import directives when parsing. 
                    // Default value is the directory of the source, which is probably what you want.
                    paths: ["less/"],
                },
                files: {
                    // compilation.css  :  source.less
                    "css/style.css": "less/style.less"
                }
            },
        },
      
//        postcss: {
//            options: {
//                map: false,
//                processors: [
//                    require('autoprefixer')({
//                        browsers: ['last 2 versions']
//                    })
//                ]
//            },
//            dist: {
//                src: 'css/*.css'
//            }
//        },
      
        watch: {
            // if any .less file changes in directory "public/css/" run the "less"-task.
            files: "less/*.less",
            tasks: ["less"]
        },
        // "less"-task configuration
    });
     // the default task (running "grunt" in console) is "watch"
     grunt.registerTask('default', ['less:less']);
     //grunt.registerTask('default', ['postcss:css']);
     grunt.registerTask('default', ['watch']);
};