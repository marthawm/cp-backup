

What are XML sitemaps?
A Sitemap is an XML file that lists the URLs for a site. It allows webmasters to include additional information about each URL: when it was last updated, how often it changes, and how important it is in relation to other URLs in the site. This allows search engines to crawl the site more intelligently.


#What is a WordPress XML Sitemap?#

Sitemap is a list of pages on a website that is accessible to all users. An XML sitemap is a way for website owners to tell search engines about all the pages that exist on their website. WordPress XML sitemap also tells search engines which links on your website are more important than others and how frequently you update your website. While sitemaps do not boost your search rankings, it allows search engines to better crawl your website.

![alt text](http://cdn3.wpbeginner.com/wp-content/uploads/2013/03/wpbeginner-sitemap-firefox.jpg "Logo Title Text 1")

######Why You Need an XML Sitemap

From a Search Engine Optimization (SEO) point of view sitemaps are extremely important. First we would like to clearly state that adding a sitemap does not affect search rankings. However, if there is some page on your site that is not indexed, then sitemap provide you a way to let search engines know about that page, so it can be indexed properly.

At Codepamoja, we use Yoast’s WordPress SEO plugin to generate our sitemaps.  install and activate WordPress SEO by Yoast plugin. By default, WordPress SEO does not enable XML sitemap functionality, so you will have to turn it on. To do that go to SEO » XML Sitemaps and check the box to enable XML sitemap functionality. WordPress SEO will show a XML Sitemap button which you can click to view your sitemap_index.xml sitemap.

######How to Tell Search Engines About Sitemaps?

Search engines are quite smart in finding a sitemap. Whenever you publish new content a ping is sent to Google and Bing to inform them about changes in your sitemap. However, we recommend that you submit your sitemap to Google by using _Google Webmaster tools_ . The benefit of this is that Google will now show you any errors, pages indexed, and other relevant stats that will be helpful to you as a webmaster.
Go to [Google Webmaster Tools](https://www.google.com/webmasters/tools/home?hl=en) . If you are not already signed in to your Google account, then you will be asked to sign in. After signing in you will reach webmaster tools. There you will see “Add a site” button, click it and then add the URL of your website.

In our case its www/codepamoja.com,

![add property pic](http://link.to.add.property.jpg "Logo Title Text 1")
![add property pic](http://link.after.adding.property.jpg "Logo Title Text 1")

######How to Add a Sitemap to Your Wordpress Site

Step 1: Click here to download the latest version of "Google XML Sitemaps". Click the orange "Download" button in the top-right corner..

Step 2: Extract the files into a folder on your desktop. The folder will be called "google-sitemap-generator"

Step 3: Login to your site's files via FTP and navigate to /wp-content/plugins/.

Step 4: Upload the "google-sitemap-generator" folder to  /wp-content/plugins/.

Step 5: You'll now need to back up to two directories until you reach your main Wordpress folder. You should be able to see at least three folders (wp-admin, wp-content and wp-includes). You'll need to create two files here with these names:

sitemap.xml

sitemap.xml.gz

Step 6: Go to wp-admin >> Plugins and click "Activate" under "Google XML Sitemaps"
Activate Wordpress Sitemap

Step 7: Now under "Google XML Sitemaps" you'll see an option called "Settings". Click on that:
Activate Wordpress Sitemap

Step 8: At the top of the new page you should see this message: "The sitemap wasn't built yet. Click here to build it the first time." I probably don't need to tell you what to do here :)
Submitting the Sitemap to Search Engines

Your sitemap will now be located at: http://example.com/sitemap.xml This is the address you can use to submit to search engines:

Google: http://www.google.com/webmasters/tools/

NOTE: **Since I developed using _localhost_ change URL http://localhost/codepamoja.com/vagrantpress/wordpress/sitemap.xml. accordingly!!**

What are HTML sitemaps?
An HTML sitemap on the other hand is supposed to be geared towards your actual website visitors. It is written or generated in plain HTML, and it usually lists all the pages/posts that are available on your WordPress site.

