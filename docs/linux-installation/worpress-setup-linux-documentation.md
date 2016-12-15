# Codepamoja.com setup on Linux kernel
## Install and setup prerequisites 
### 1. LAMP(linux, Apache, MySQL, PHP)
#### Apache 
Apache is a web server where we will host the codepamoja site.  
To install ```Apache```; we use ``apt-get`` command.  
Open terminal and run the following commands.    
```sudo apt-get update``` 
```sudo apt-get install apache2```  
After this you might want to check if you are successfull by opening this URL in your browser [127.0.0.1](http://127.0.0.1) or [localhost](http://localhost).
delete the index.html file in the directory ```/var/www/html```
#### MySQL
MySQL is a database management system.  
To install it run the following in terminal.  
```sudo apt-get update```  
```sudo apt-get install mysql-server php5-mysql```  
You will be asked to set "root" password. I would prefer using my terminal password so as not to forget.  
Run these few more commands to complete mysql setup.  
```sudo mysql_install_db``` This create a database structure.  
```sudo mysql_secure_installation```
Follow up with the installation instructions and password setup
#### PHP
PHP will handle our .php files in the project
to install run the following  
```sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt```   
This should install all modules you require.
you can check your version of php by running `php -v` in the terminal.
 
---
### 2. Set up Database
We need to create a database for codepamoja site.
log in to the MySql admin root using the following command:  
```mysql -u root -p```  
i am hoping you remember the password you set
we will now create a database ```CREATE DATABASE codepamoja;```
---
### 3. install git
if you have not installed git run   
```sudo apt-get update ```  
```sudo apt-get install git```
----
### 4. Set Up project
#### clone project
In your terminal  navigate to ```/home/[user]/```;  your Home directory and clone project here using   
```git clone https://github.com/Competa-IT/codepamoja.com.git```
#### wordpress setup
change directory into the `vagrantpress`folder by keying  
`cd /home/[user]/codepamoja.com/vagrantpress` while in that directory
run  
` sudo  tar xzvf latest.tar.gz`  
this will extract the latest version of wordpress and merge the new folders with the old one. thereby maintaining the codepamoja theme folder. 
#### configuring wordpress  
1. key in this in the terminal   
`cd /home/[user]/codepamoja.com/vagrantpress/wordpress` 
2. run `cp wp-config-sample.php wp-config.php`
3. open the newly created `wp-config.php` file, and change the following values of variables:`DB_NAME` to `wordpress` and `USER_NAME` to `wordpress` and `DB_PASSWORD` to `wordpress`
4. save that file
5. choose `admin` as username and `vagrant` as password
---
### 5. install and run  vagrant
#### install virtualbox
To install virtualbox we need to run:  
``sudo apt-get install virtualbox-4.3``  
the latest versions of virtualbox will not run, so try older versions.  
``sudo apt-get install dpkg-dev virtualbox-dkms`` 
 ### install vagrant
you now need to install vagrant by running `sudo apt-get install vagrant`  
this will install the most conducive version of vagrant.
#### run vagrant
Open terminal.  
change directory to the project folder by running  
`cd /home/[user]/codepamoja.com/vagrantpress`  
Before any other step, You need to install the hostupdater plugin
##### hostupdater plugin
`vagrant plugin install vagrant-hostsupdater`  
After successful hostupdater installation, 
Run `vagrant up` to install available dependencies in the project.  
Wait till the process completes. 
---
  **6. install grunt**
 # Install Nodejs
To install Nodejs  run the follwing commands in terminal  
`sudo apt-get update`  
 `sudo apt-get install nodejs-legacy`  
 
 # Install grunt
 Then install grunt using   
 `npm install`  
 `gem install sass`   
 `gem install ruby`   
 Then run `grunt`
 
 when this is done, your default browser should open automatically with the `vagrantpress.dev` URL.
 switch to `vagrantpress.dev/wp-admin` to configure the pages
 
 ----