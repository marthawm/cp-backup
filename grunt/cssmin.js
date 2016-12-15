module.exports={
	my_target: {
        files: [{
            expand: true,
            cwd: 'vagrantpress/wordpress/wp-content/themes/codepamoja/css',
            src: ['*.css', '!*.min.css'],
            dest: 'vagrantpress/wordpress/wp-content/themes/codepamoja/css/',
            ext: '.min.css', 
        }]
    }
}