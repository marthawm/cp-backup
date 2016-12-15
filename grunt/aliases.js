module.exports = {
	'default':[
		'clean',
		'copy',
		'sass',
		'cssmin',
		'jshint',
		'uglify',
		'htmlhint',
		'connect',
		'watch'
	],

	'build':[
		'clean',
        'copy'
	],

	'conn':[
		'connect'
	],

	'css':[
		'sass',
		'cssmin'
	],

	'html':[
		'htmlhint'
	],

	'js':[
		'jshint',
		'uglify'
	],

	'production':[
		'build',
		'css',
		'js',
		'html',
		'connect'
	],

	'serve':[
		'connect',
		'watch'
	]
}