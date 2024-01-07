module.exports = function(grunt) {
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      // Configura la tarea grunt-contrib-concat si necesitas
    });
  
    // Carga los paquetes necesarios
    grunt.loadNpmTasks('grunt-contrib-concat');
  
    // Define la tarea predeterminada
    grunt.registerTask('default', []);
  };