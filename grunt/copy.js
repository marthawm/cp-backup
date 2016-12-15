module.exports={
    php: {
        cwd: 'src/',
        src: ['**/*.php'],
        dest: 'vagrantpress/wordpress/wp-content/themes/codepamoja',
        expand: true
    },
    images: {
        cwd: 'src/',
        src: ['img/*'],
        dest: 'vagrantpress/wordpress/wp-content/themes/codepamoja',
        expand: true
    },
    animation1: {
        cwd: 'src/',
        src: ['img/home-animation/*'],
        dest: 'vagrantpress/wordpress/wp-content/themes/codepamoja/',
        expand: true
    },
    animation2: {
        cwd: 'src/',
        src: ['img/home-animation/*/*'],
        dest: 'vagrantpress/wordpress/wp-content/themes/codepamoja/',
        expand: true
    },
    javascript: {
        cwd: 'src/',
        src: ['js/vendor/*.js'],
        dest: 'vagrantpress/wordpress/wp-content/themes/codepamoja',
        expand: true
    }
}