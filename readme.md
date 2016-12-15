# The codepamoja development setup

* * *  

## Directory structure

* **src** - Work in here
* **vagrantpress** - This is where vagrant is installed and the vagrant environment is run (alternative to wordpress)
* **vagrantpress/wordpress/wp-content/themes/codepamoja** - This is where the theme is located, used at vagrantpress.dev. Don't work in here, work in src.

* * *  

## SETUP

_You only need to run these steps once_

#### NodeJS, NPM & Grunt

You need to install NodeJS and NPM (Node Package Manager) for your OS: https://nodejs.org/en/ (npm is bundled with nodeJS)

Once you have NodeJS and NPM installed, open a terminal window / command prompt and navigate to the root of the project (where gruntfile.js and package.json are located) or just open a terminal in the root of the project.

`cd /path/to/project`  

*How to install grunt*

Check http://gruntjs.com/getting-started or follow these steps:

- Install Grunt globally:

 `sudo npm install -g grunt-cli`  

- Then install the npm dependencies defined in package.json:

`npm install`  

- If you haven't got ruby & ruby-gems installed, you will need to install them for your OS.

#### Vagrant & VirtualBox

Install [Vagrant](https://www.vagrantup.com/)  
Install [VirtualBox](https://www.virtualbox.org/wiki/Downloads)

Run `vagrant plugin install vagrant-hostsupdater` in your terminal / command line

For more info on how to use vagrant see docs/How to run wordpress.md

* * *  

## GRUNT TASKS

To run the different grunt tasks, which will be explained below, the following node modules were installed using the package.json:

- grunt-htmlhint: Task used to check html files for mistakes e.g. missing tag pairs. 
- grunt-contrib-sass: Task to compile sass to css. Sass is created in src folder, css only in theme. Never work in css files
- grunt-contrib-cssmin: Task to minify the css for better browser performance
- grunt-contrib-jshint: Task to check JavaScript for errors
- grunt-contrib-uglify: Task to uglify the JS, similar to cssmin
- grunt-contrib-nodeunit: for testing..
- grunt-contrib-clean: clean the folder where your theme is located to prevent duplicate files etc.
- grunt-contrib-copy: copy files from src folder to the theme folder
- grunt-contrib-connect: connect to a (local)host
- grunt-contrib-watch: Task to watch files for changes, then excecutes the tasks that you want to run (e.g. htmlhint)
- load-grunt-config: load configuration for the node modules

All node modules are configured in the /grunt folder.

In grunt/aliases.js, the following grunt tasks are configured:

- 'grunt default' or 'grunt': runs all grunt tasks
- 'grunt build': runs clean and copy task (does not include copy task yet!)
- 'grunt conn': runs connect task
- 'grunt css': runs sass and cssmin tasks
- 'grunt html': runs htmlhint task
- 'grunt js': runs uglify and jshint tasks
- 'grunt production': runs aliases 'build', 'css','html', 'js', 'conn'
- 'grunt serve': runs connect and watch task. Use if developing

All aliases can be used in the terminal in the project root folder.
