module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {                                             // Task
            dist: {                                         // Target
                options: {                                  // Target options
                    style: 'expanded'
                },
                files: {                                    // Dictionary of files
                    'css/style.css': 'sass/style.scss'      // 'destination': 'source'
                }
            }
        },
        watch: {
        	scss: {
        		files: ['**/*.scss'],
        		tasks: ['sass']
        	},
        }
    });

    // Load the Sass tasks, watch tasks
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    // Default task(s).
    grunt.registerTask('default', ['watch']);

};