module.exports={
	options: {
        manage: false
    },
    desktop: {
        files: [{
            expand: true,
            src: 'js/*.js',
            dest: 'vagrantpress/wordpress/wp-content/themes/codepamoja/',
            cwd: 'src/',
            ext: '.min.js'
        }]

    }
}