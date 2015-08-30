//Gruntfile
module.exports = function(grunt) {

//Initializing the configuration object
grunt.initConfig({

    // Paths variables
    paths: {
      // Development where put LESS files, etc
      assets: {
        css: './laravel/public/assets/stylesheets/',
        js: './laravel/public/assets/javascripts/',
        vendor: './laravel/public/assets/vendor/'
      },
      // Production where Grunt output the files      
      css: './public/css/',
      js: './public/js/'

    },

    // Task configuration
    concat: {  
      //...
    },  
    less: {
      //...
    },  
    uglify: {
      //...
    },  
    phpunit: {
      //...
    },  
    watch: {
      //...
    }  
});

// Plugin loading

// Task definition

};