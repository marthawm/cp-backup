# Install codepamoja.com project on a mac machine

Running wordpress local on your machine.

<h2>Getting started:</h2>

For this you need vagrant and virtualbox

<li><a href="http://www.vagrantup.com/downloads.html">Vagrant</a></li>
<li><a href="https://www.virtualbox.org/wiki/Downloads">Virtualbox</a></li>

or try using these commands:

sudo apt-get install virtualbox
sudo apt-get install vagrant
sudo apt-get install virtualbox-dkms

open finder, open documents, make a new folder, right click on the new folder, and choose open with terminal, run the command, vagrant plugin install vagrant-hostsupdater.

To install the project follow to next steps.

<h2>Important proceed each step and wait with the next step until the previous step is done</h2> 

01. Clone the project: git clone git@github.com:Competa-IT/codepamoja.com.git
02. Download wordpress https://wordpress.org/ and unpack it. copy everything except the content folder.
03. Open your project folder and got to vagrantpress/wordpress now paste the documents you just copied.
04. Open your terminal at the vagrantpress folder in the codepamoja folder
05. Run the command <code>vagrant plugin install vagrant-hostsupdater</code>
06. Run the command <code>vagrant up</code> from the directory.
07. Open your terminal at the codepamoja folder
08. Run the command <code>npm install</code>
09. When it's done run the command <code>grunt</code>
10. Open your browser to <a href="http://vagrantpress.dev/wp-admin">http://vagrantpress.dev/wp-admin</a> (if running in xamp or wamp server, include localhost at the beginning of the url, like http://localhost/vagrantpress.dev/wp-admin)
11. Update the database // Enter "wordpress" at the following attributes: DB_NAME, DB_USER, DB_PASSWORD.
12. Login with admin / vagrant
13. In the menu go to appearance > Themes Select the Codepamoja theme.
14. Now in the menu go to tools > import > wordpress importer
15. Import the xml file that is on git.
16. now in the menu got to settings > reading and make it a static page select front page as home and blog page as blog.
15. Check the website on <a href="http://vagrantpress.dev">http://vagrantpress.dev</a>




