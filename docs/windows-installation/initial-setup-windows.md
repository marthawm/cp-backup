clone the project from https://github.com/Competa-IT/codepamoja.com by doing, 

HTTPS git clone https://github.com/Competa-IT/codepamoja.com.git
SSH   git clone git@github.com:Competa-IT/codepamoja.com.git

                                     If you choose to use WAMP server

download WAMP server from http://www.wampserver.com/en/
(make sure you save your username and password during the installation process)

navigate to www folder from your current terminal location, e.g. 

```
C:\Users\mathenge>cd ../..

C:\>cd wamp64/www/

C:\wamp64\www>
```

Wamp server uses this location to store and launch your applications,(WWW folder is wamp server's localhost) so while at www, do 

C:\wamp64\www>git clone git@github.com:Competa-IT/codepamoja.com.git

this command will clone the project to www folder.

                                                SETUP DATABASE

From the photo, click the arrow right on your task bar, and click on the WAMP icon,

![CLICKING WAMP](https://www.pinterest.com/pin/301389400046206772/ "Logo Title Text 1")

It will bring up a menu, click **phpMyAdmin** which will open a page where you setup the database.

![NAVIGATE TO PHPMYADMIN](https://www.pinterest.com/pin/301389400046206764/ "Logo Title Text 1")

after imputing username and password, click new >> -_databasename_- >> create

![CREATE NEW DATABASE](https://github.com/Competa-IT/codepamoja.com/blob/develop/docs/pictures/setup-database.png "Logo Title Text 1")

Navigate to **wp-config.php** file which will be located in wordpres folder, e.g. 
_C:\wamp64\www\codepamoja.com\vagrantpress\wordpress_

open wp-config.php file with your favourite editor and edit according to the database setting above

![EDITING WP-CONFIG.PHP](https://github.com/Competa-IT/codepamoja.com/docs/pictures/editing-wp-config-file.png "Logo Title Text 1")

(note, when you download wordpress wp-config.php file will be named wp-config-sample.php, so easily done, remove **-sample** from the file name and edit as above the same file. )

After all the above is done, navigate on your browser to http://localhost/codepamoja.com/vagrantpress/wordpress/ which will open up wordpress installation page,
follow the instruction making sure you keep in mind login credentials.

After wordpress is done, it will open to http://localhost/codepamoja.com/vagrantpress/wordpress/wp-admin (wordpress dashboard) click on **appearance >> themes** and activate codepamoja theme.

You will notice that the styling is a little off, so you need to run the following commands from the project's location i.e ```C:\wamp64\www\codepamoja.com>```

```C:\wamp64\www\codepamoja.com>npm install```-- will check package.json file for dependencies required and install them. A _package.json_ file contains meta data about your app or module. Most importantly, it includes the list of dependencies to install from npm when running npm install.
```{
    "devDependencies": {
        "browserify": "~3.36.0",
        "gulp": "~3.6.0"
    },
    "dependencies": {
        "backbone": "~1.1.2",
        "jquery": "~2.1.0"
    }
}```

```C:\wamp64\www\codepamoja.com>grunt``` --will use gruntfile.js to check for tasks required to be done and run them. Gruntfile.js file. This is the default place where our settings will go.











