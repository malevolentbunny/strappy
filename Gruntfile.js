module.exports = function(grunt) {
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.initConfig({
        watch: {
            files: "*.less",
            tasks: ["less"]
        },
        less: {
            development: {
                options: {
                    paths: ["/"],
                },
                files: {
                    "style.css": "style.less"
                }
            },
        },
    });
    grunt.registerTask('default', ['watch']);
};
