#How To Speed Up WordPress

1. Choose a **good host** - choose a WP Engine managed wordpress hosting.
2. Use a **solid theme/ framework** - keep the guts simple, avoid frameworks/plugins that you will never use.
3  Use an effective **caching plugin** - they drastically improve page loads time, simply install and activate, elements are cached and page loads faster.
4. Use a **content delivery network** (CDN) - a CDN takes all your static files you’ve got on your site (CSS, Javascript and images etc) and lets visitors download them as fast as possible by serving the files on servers as close to them as possible.
5. **Optimize images** (automatically)- you can use  WP-SmushIt plugin which drastically reduce the file size of an image, while not reducing quality.
6. **Optimize your homepage to load quickly** -
    Show excerpts instead of full posts
    Reduce the number of posts on the page (I like showing between 5-7)
    Remove unnecessary sharing widgets from the home page (include them only in posts)
    Remove inactive plugins and widgets that you don’t need
    Keep in minimal! Readers are here for content, not 8,000 widgets on the homepage

7. **Optimize your WordPress database** - WP-Optimize plugin, lets you do just one simple task: optimize the your database (spam, post revisions, drafts, tables, etc.) to reduce their overhead.
8. **Disable hotlinking and leeching of your content** - Hotlinking is a form of bandwidth “theft.” It occurs when other sites direct link to the images on your site from their articles making your server load increasingly high.
   Place this code in your root .htaccess file:

    disable hotlinking of images with forbidden or custom image option
    RewriteEngine on
    RewriteCond %{HTTP_REFERER} !^$
    RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?sparringmind.com [NC]
    RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?google.com [NC]
    RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?feeds2.feedburner.com/sparringmind [NC]
    RewriteRule \.(jpg|jpeg|png|gif)$ – [NC,F,L]

    You’ll notice "my feed" (from FeedBurner), you’ll need to replace it with your feed’s name, otherwise your images won’t appear correctly there.

9. **Add an expires header to static resources** - An Expires header is a way to specify a time far enough in the future so that the clients (browsers) don’t have to re-fetch any static content (such as css file, javascript, images etc). This way can cut your load time significantly for your regular users.
10. **Adjust Gravatar images** - it will at least benefit your site speed if you set the default image (found in “Discussion”, under the settings tab in the WordPress dashboard) to a blank space rather than a default image.
11. **Add LazyLoad to your images** - LazyLoad is the process of having only only the images above the fold load (i.e. only the images visible in the visitor’s browser window), then, when reader scrolls down, the other images begin to load, just before they come into view. it can also save bandwidth by loading less data for users who don’t scroll all the way down on your pages.
12. **Control the amount of post revisions stored** - WordPress, left to its own devices, would store every draft indefinitely. Now, when this post is done and published, why would I need all of those drafts stored? That’s why I use the Revision Control plugin to make sure I keep post revisions to a minimum, set it to 2 or 3 so you have something to fall back on in case you make a mistake, but not too high that you clutter your backend with unnecessary amounts of drafted posts.
13. **Turn off pingbacks and trackbacks** - By default, WordPress interacts with other blogs that are equipped with pingbacks and trackbacks. very time another blog mentions you, it notifies your site, which in turn updates data on the post. Turning this off will not destroy the backlinks to your site, just the setting that generates a lot of work for your site.
14. **Replace PHP with static HTML, when necessary**
15. Use **CloudFlare** - To put it bluntly, CloudFlare, along with the W3 Total Cache plugin discussed above, are a really potent combination (they integrate with each other) that will greatly improve not only the speed, but the security of your site.
