**INSTALL NODEJS**

1.Download the Windows installer from the Nodes.js® web site. https://nodejs.org/en/download/
2.Run the installer (the .msi file you downloaded in the previous step.)
3.Follow the prompts in the installer (Accept the license agreement, click the NEXT button a bunch of times and accept the default installation settings).

![NODE INSTALLER](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 1")

Restart your computer. You won’t be able to run Node.js® until you restart your computer.

Test if nodejs is working, 

**Test Node**. To see if Node is installed, open the Windows Command Prompt, Powershell or a similar command line tool, and type node -v. This should print a version number, so you’ll see something like this v0.10.35.
**Test NPM**. To see if NPM is installed, type npm -v in Terminal. This should print NPM’s version number so you’ll see something like this 1.4.28
**Create a test file and run it**. A simple way to test that node.js works is to create a JavaScript file: name it hello.js, and just add the code console.log('Node is installed!');. To run the code simply open your command line program, navigate to the folder where you save the file and type node hello.js. This will start Node and run the code in the hello.js file. You should see the output Node is installed!.

New versions of Node and NPM come out frequently. To install the **updates**, just download the installer from the Nodejs.org site and run it again. The new version of Node and NPM will replace the older versions.






   **INSTALL GRUNT** (Javascript task runner)

install Grunt's command line interface (CLI) globally.
```npm install -g grunt-cli```
This will put the grunt command in your system path, allowing it to be run from any directory.
Note that installing grunt-cli does not install the Grunt task runner! The job of the Grunt CLI is simple: run the version of Grunt which has been installed next to a Gruntfile. This allows multiple versions of Grunt to be installed on the same machine simultaneously.

_Working with an existing Grunt project_
Assuming that the Grunt CLI has been installed and that the project has already been configured with a package.json and a Gruntfile, it's very easy to start working with Grunt:

Change to the project's root directory.
Install project dependencies with npm install.
Run Grunt with grunt.
That's really all there is to it. Installed Grunt tasks can be listed by running grunt --help but it's usually a good idea to start with the project's documentation.

**INSTALL SASS**(Syntatically Awesome Style Sheet)
Before you start using Sass you will need to install **Ruby**. http://rubyinstaller.org/ use Ruby Installer. Open the command prompt and type ruby -v. If Ruby responds, and if it shows a version number at or above 2.2.2, then type gem --version. If you don't get an error, skip Install Ruby step. Otherwise, we'll install a fresh Ruby.
after ruby is installed,run ```gem install sass``` . Ruby uses Gems to manage its various packages of code like Sass. 




