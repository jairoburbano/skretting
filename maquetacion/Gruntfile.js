module.exports = function(grunt) {

	// Automaticamente carga las tareas
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	// Configuración
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		concat: {
			options: {
				separator: ';',
			},
			dist: {
				src: ['bower_components/jquery/dist/jquery.min.js', 'js/jquery-ui.js', 'bower_components/isotope/dist/isotope.pkgd.js', 'bower_components/imagesloaded/imagesloaded.pkgd.js', 'bower_components/jquery-validation/dist/jquery.validate.js', 'bower_components/flexslider/jquery.flexslider.js', 'js/zoom.js',  'js/turn.js',  'js/validate.js', 'js/plugins.js', 'js/main.js'],
				dest: 'js/app.js'
			}
		},
		uglify: {
			production: {
				options: {
					mangle: true,
					compress: false,
					banner: '/*! Author: Agencia Digital Reactor\n' +
						' * v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>' +
						' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
						' */\n'
				},
				files: {
					'js/app.min.js': ['js/app.js']
				}
			},
		},
		svgstore: {
		    options: {
		        prefix: "shape-",
		        cleanup: true,
		        svg: {
		            style: "display: none;"
		        }
		    },
		    default: {
		        files: {
		            "svg-defs.svg": ["svgs/*.svg"]
		        }
		    }
		},
		watch: {
		    options: {
		        livereload: true,
		    },
		    svg: {
		        files: ['svgs/*.svg'],
		        tasks: ['svgstore'],
		        options: {
		            spawn: false
		        }
		    },
		    js: {
		        files: ['js/*.js'],
		        tasks: ['concat', 'uglify'],
		        options: {
		            spawn: false
		        }
		    }
		}
	});

	grunt.registerTask('default', ['concat', 'uglify']);

};
