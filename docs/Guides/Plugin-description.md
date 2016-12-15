---

# Codepamoja Website Plugins.

---
---

Here are the plugins used for this website
   * WP-PostViews
   * WP-PageNavi
   * WP OAM Renderer
   * WordPress Importer
   * W3 Total Cache
   * User Role Editor
   * Simple 301 Redirects
   * Recent Posts Widget Extended
   * Newsletter
   * Contact Form 7
   * Category Featured Images
   * Better Analytics
   * All In One WP Security
   * Advanced Automatic Updates
   * Hierarchical HTML Sitemap

## Function of the above plugins in the website.

---
---

### 1. WP-PostViews

#### Description

This plugin enables the Administator to display how many times a post/page had been viewed.

#### Usage

* Open ` vagrantpress\wordpress\wp-content\themes\codepamoja/archive.php`
* You may place it in `archive.php`, single.php, post.php or page.php also.
* Find: `<?php while (have_posts()) : the_post(); ?>`
* Add Anywhere Below It (The Place You Want The Views To Show): `<?php  if(function_exists('the_views')) { the_views(); } ?>`
* Or you can use the shortcode `[views]` or `[views id="1"]` (where 1 is the post ID) in a post

#### Upgrading

* Deactivate `wp-postviews` Plugin
* Open `wp-content/plugins` Folder
* Put/Overwrite: Folder: `wp-postviews`
* Activate `WP-PostViews` Plugin

---
----

### 2. WP-PageNavi

#### Description

This plugin provides the `wp_pagenavi()` template tag which generates fancy pagination links

#### How to install
* You can either install it automatically from the WordPress admin, or do it manually:
* Unzip the archive and put the `wp-pagenavi` folder into your plugins folder `wp-content/plugins.`
* Activate the plugin from the Plugins menu

#### Usage
In your theme, you need to find calls to `next_posts_link()` and `previous_posts_link()` and replace them.with `<?php wp_pagenavi(); ?>`

this is the path where it has been used in this website:-
`codepamoja.com\vagrantpress\wordpress\wp-content\themes\codepamoja\templates\blog\blog-navigation.php`

for multiple For multipart pages, you would look for code like this:`<?php wp_link_pages( ... ); ?>`

and replace it with this:`<?php wp_pagenavi( array( 'type' => 'multipart' ) ); ?>`

* `NB/` Go to WP-Admin -> Settings -> PageNavi for configuration.

---
---
### 3. WP OAM Renderer

#### Description


* Allows upload for OAM files in Wordpress.
* Unzips the` my_file.oam` in `my_file/ `folder at the same location
* Provides automatic server-side iframe rendering for <a href="http://site.com/wp-content/upload/2013/03/my_file.oam"></a>
* Provides [oam] shortcode for manuel embed
*  Deletes my_file/ folder when my_file.oam is deleted from the library

#### How to install

* Get the source from Github (https://github.com/ekino/wp-oam-renderer) or Wordpress SVN repository.
* Go to Admin > Plugins > installed plugins > WP OAM Renderer
* Activate WP OAM Renderer

#### Usage

Simply insert your oam in your content from the media library using the "ATTACHMENT DISPLAY SETTINGS" name "Media File". It will generate a link to the OAM file and will be rendered via an iframe.

##### Getting size from animation

* [oam id="28"]

###### Providing `width`, `height` will be calculated proportionaly

* [oam id="28" width="960"]

###### Providing both `width` and `height`

* [oam id="28" width="960" heigh="540"]

##### Parameters

* `id` (mandatory)
* `width` (optional)
* `height` (optional)

---
---

### 4. WordPress Importer

#### Description

The WordPress Importer will import the following content from a WordPress export file:
* Posts, pages and other custom post types
* Comments
* Custom fields and post meta
* Categories, tags and terms from custom taxonomies
* Authors

#### How to install

The quickest method for installing the importer is:
* Visit Tools -> Import in the WordPress dashboard
* Click on the WordPress link in the list of importers
* Click `Install Now`
* Finally click `Activate Plugin & Run Importer`

If you would prefer to do things manually then follow these instructions:

* Upload the wordpress-importer folder to the `/wp-content/plugins/` directory
* Activate the plugin through the `Plugins` menu in WordPress
* Go to the Tools -> Import screen, click on WordPress

---
---

### 5. W3 Total Cache

#### Description

W3 Total Cache improves the user experience of your site by increasing server performance, reducing the download times and providing transparent content delivery network (CDN) integration.

Features:

* Compatible with shared hosting, virtual private / dedicated servers and dedicated servers / clusters
* Transparent content delivery network (CDN) management with Media Library, theme files and WordPress itself
* Mobile support: respective caching of pages by referrer or groups of user agents including theme switching for groups of referrers    or user agents
* Caching of (minified and compressed) pages and posts in memory or on disk or on CDN (mirror only)
* Caching of (minified and compressed) CSS and JavaScript in memory, on disk or on CDN
* Caching of feeds (site, categories, tags, comments, search results) in memory or on disk or on CDN (mirror only)
* Caching of search results pages (i.e. URIs with query string variables) in memory or on disk
* Caching of database objects in memory or on disk
* Caching of objects in memory or on disk
* Minification of posts and pages and feeds
* Minification of inline, embedded or 3rd party JavaScript (with automated updates)
* Minification of inline, embedded or 3rd party CSS (with automated updates)
* Browser caching using cache-control, future expire headers and entity tags (ETag) with "cache-busting"
* JavaScript grouping by template (home page, post page etc) with embed location control
* Non-blocking JavaScript embedding
* Import post attachments directly into the Media Library (and CDN)
* WP-CLI support for cache purging, query string updating and more

---
---

### 6. User Role 

#### Description

With User Role Editor WordPress plugin you can change user role (except Administrator) capabilities easy, with a few clicks. Just turn on check boxes of capabilities you wish to add to the selected role and click "Update" button to save your changes. That's done. Add new roles and customize its capabilities according to your needs, from scratch of as a copy of other existing role. Unnecessary self-made role can be deleted if there are no users whom such role is assigned. Role assigned every new created user by default may be changed too. Capabilities could be assigned on per user basis. Multiple roles could be assigned to user simultaneously. You can add new capabilities and remove unnecessary capabilities which could be left from uninstalled plugins. Multi-site support is provided

#### How to install

Installation procedure:

* Deactivate plugin if you have the previous version installed.
* Extract "user-role-editor.zip" archive content to the `/wp-content/plugins/user-role-editor` directory.
* Activate `User Role Editor` plugin via `Plugins` menu in WordPress admin menu.
* Go to the `Users > User Role Editor`menu item and change your WordPress standard roles capabilities according to your needs.
 
---
---

### 7. Simple 301 Redirects

#### Description

Simple 301 Redirects provides an easy method of redirecting requests to another page on your site or elsewhere on the web. It's especially handy when you migrate a site to WordPress and can't preserve your URL structure. By setting up 301 redirects from your old pages to your new pages, any incoming links will be seemlessly passed along, and their pagerank (or what-have-you) will be passed along with them.

#### How to install

* Upload Simple 301 Redirects to the /wp-content/plugins/ directory
* Activate the plugin through the 'Plugins' menu in WordPress
* Add redirects on the Settings > 301 Redirects page.

---
---

### 8. Recent Posts Widget 

#### Description

This plugin will enable a custom, flexible and super advanced recent posts, you can display it via shortcode or widget. Allows you to display a list of the most recent posts with thumbnail, excerpt and post date, also you can display it from all or specific or multiple taxonomy, post type and much more

#### How to install

Through Dashboard

1. Log in to your WordPress admin panel and go to Plugins -> Add New
2. Type recent posts widget extended in the search box and click on search button.
3. Find Recent Posts Widget Extended plugin.
4. Then click on Install Now after that activate the plugin.
5. Go to the widgets page Appearance -> Widgets.
6. Find Recent Posts Extended widget.

Installing Via FTP

1. Download the plugin to your hardisk.
2. Unzip.
3. Upload the recent-posts-widget-extended folder into your plugins directory.
4. Log in to your WordPress admin panel and click the Plugins menu.
5. Then activate the plugin.
6. Go to the widgets page Appearance -> Widgets.
7. Find Recent Posts Extended widget.

---
---

### 9. Newsletter

#### Description

Newsletter is a real newsletter system for your WordPress blog: perfect for list building, you can easily create, send and track e-mails, headache-free

#### How to install

* In your WordPress Admin, go to the ***Add New Plugins page***
* Search for: Newsletter
* Newsletter should be the first result. Click the Install link.

---
---

### 10. Contact Form 7

To setup this plugin, first activate it and create two forms:

#### The first form is called *Pitch project*

copy this form into the form:

```sh

<label class="label">Full name </label>
    [text* full-name class:pitch-input class:name-icon-white]

<label class="label">Company name</label>
   [text* company-name class:pitch-input class:company-icon-white]
   
<label class="label">Email</label>
    [email* email class:pitch-input class:email-icon-white

<label class="label">Phone</label>
[tel* phone-number class:pitch-input class:phone-icon-white]

<label class="label">project description</label>
    [textarea project-descript class:pitch-project-descr]

[submit class:btn class:pitch-your-project-btn "Submit project"]

```

#### the second form is called *Register project*

copy this form into the form:

```sh  

<label class="label">Full name</label>
    [text* full-name class:register-input class:name-icon-orange]

<label class="label">Company name</label>
    [text* company-name class:register-input class:company-icon-orange]

<label class="label">Email</label>
   [email* email class:register-input class:email-icon-orange]

<label class="label">Phone</label>
[tel* phone-number class:register-input class:phone-icon-orange]

<label class="label">project description</label>
    [textarea project-descript class:project-descr]

[submit class:btn class:send-register-btn "Submit project"]

```

 Adding contact form 7 in pitch your project section

1. In the backend create a page call it Pitch and publish
2. Click on the newly created page and navigate to the screen option button at the to right corner
3. Check the custom field checkbox
4. Scroll down to the bottom of the page (where the custom field is located) and under the name field click on enter new link.
5. Enter the name as title-pitch and your custom text in the value field e.g. (Pitch Your Project)
6. Add another field by clicking on the enter new
7. Enter the name as content-pitch and your custom text in the value field e.g. (Random content)
8. Scroll up to the editor, then paste in the shortcode for the contact form 7

 Adding contact form 7 in register project section

1. In the backend create a page call it Register and publish (make sure there is only one Register page!)
2. Click on the newly created page and navigate to the screen option button at the to right corner
3. Check the custom field checkbox
4. Scroll down to the bottom of the page (where the custom field is located) and under the name field click on enter new link.
5. Enter the name as title and your custom text in the value field e.g. (Pitch Your Project)
6. Add another field by clicking on the enter new
7. Enter the name as title-bold and your custom text in the value field e.g. (Random content)
8. Scroll up to the editor, then paste in the shortcode for the contact form

---
---

### 11. Category Featured Images

#### Description

This plugin allows to set a featured image for each category. Posts without a featured image set will show the category's featured image instead. Featured images usually are placed by the theme in the single post page, in the latest posts page, etc

#### How to install

* Install and activate the plugin
* Go in Posts \ Categories
* Edit a category
* Set the category featured image

---
---

### 12. Better Analytics

#### Description

The Better Google Analytics plugin allows you to easily add Google Analytics code to your website and gives you the power to track virtually everything. Better Google Analytics includes heat maps, reports, charts, events and site issue tracking in your WordPress admin area without the need to log into your Google Analytics account.

Better Google Analytics allows you to manage your Google Analytics account from within your WordPress admin area

#### How to install

* Upload better-analytics folder to the `/wp-content/plugins/ `directory.
* Activate the Better Google Analytics plugin through the `Plugins` menu in the WordPress admin area.
* Link your Google Analytics account under `Settings -> Better Analytics -> API`.
* Pick your Google Analytics Web Property ID under `Settings -> Better Analytics -> General`.
* It's probably a good idea to disable any other Google Analytics plugins/systems you may have installed, unless you are intentionally wanting to feed data into multiple Analytics Web Properties.

---
---

### 13. All In One WP Security

#### Description

It reduces security risk by checking for vulnerabilities, and by implementing and enforcing the latest recommended WordPress security practices and techniques.

All In One WP Security also uses an unprecedented security points grading system to measure how well you are protecting your site based on the security features you have activated.

#### How to install

To begin making your WordPress site more secure:

* Upload the `all-in-one-wp-security.zip` file from the Plugins->Add New page in the WordPress administration panel.
* Activate the plugin through the `Plugins` menu in WordPress
* Go to Settings menu under`WP Security` and start activating the security features of the plugin.

### Usage

* Go to the settings menu after you activate the plugin and follow the instructions.

---
---

### 14. Advanced Automatic Updates

#### Description

Advanced Automatic Updates adds extra options to WordPress' built-in Automatic Updates feature. On top of security updates, it also supports installing major releases, plugins, themes, or even regular SVN checkouts

#### How to install

* In your WordPress Admin, go to the ***Add New Plugins page***
* Search for: advanced automatic updates
* Advanced Automatic Updates should be the first result. Click the Install link.


### 15. Hierarchical HTML Sitemap

Activate this plugin 

then on the page that you want to add an HTML Sitemap, add this shortcode to the content area

**[htmlmap]**

OR upload the this file in docs _codepamoja.sitemaps.2016-08-08.xml_ and contiune from xml sitemapm implementation


---------------------------------------------------------------------------------------------
---




