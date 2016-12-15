# codepamoja.com

Running wordpress local on your machine.

<h2>Getting started:</h2>

For this you need vagrant and virtualbox

<li><a href="http://www.vagrantup.com/downloads.html">Vagrant</a></li>
<li><a href="https://www.virtualbox.org/wiki/Downloads">Virtualbox</a></li>

or try using these commands:

sudo apt-get install virtualbox
sudo apt-get install vagrant
sudo apt-get install virtualbox-dkms

To install the project follow to next steps.

<h2>Important proceed each step and wait with the next step until the previous step is done</h2> 

01. Clone the project from the <a href="https://github.com/vagrantpress/vagrantpress">codepamoja project on github</a>
02. Open your terminal at the vagrantpress folder in the codepamoja folder
03. Run the command <code>vagrant plugin install vagrant-hostsupdater</code>
04. Run the command <code>vagrant up</code> from the directory.
05. Open your terminal at the codepamoja folder
06. Run the command <code>npm install</code>
07. When it's done run the command <code>grunt</code>
08. Open your browser to <a href="http://vagrantpress.dev/wp-admin">http://vagrantpress.dev/wp-admin</a> (if running in xamp or wamp server, include localhost at thee begging of the url, like http://localhost/vagrantpress.dev/wp-admin)
09. Update the database
10. Login with admin / vagrant
11. In the menu go to appearance > Themes
12. Select the codepamoja theme here and your done
13. Check the website on <a href="http://vagrantpress.dev">http://vagrantpress.dev</a>





