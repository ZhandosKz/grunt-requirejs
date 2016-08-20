module.exports = function(grunt) {
    var requireJsTask = require("./static/build");

    grunt.initConfig({
        clean: {
            build: {
                src: ["static_build/*", "!static_build/.gitignore"]
            }
        },
        requirejs: {
            base: requireJsTask()
        }
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-requirejs');

    grunt.registerTask("default", ["clean:build", "requirejs:base"])
};