#How to add photos for mobile in photo-impression section

1.login to wp-admin
2.Go to grid >> Photo-impression
    The last 4 uploads will appear on both mobile and desktop, so pay attention to what you upload in the last 4.

# Agile page setup
**Agile section and partners pages**

1. First create the agile page in wp-admin 
2. Then in the right sidebar select home page as the parent
3. Then create the supporters & partners page then select home as the parent

Latets Blog Page section

1. First create the latest blog page in wp-admin 
2. Then in the right sidebar select blog page as the parent

# How to add menu items in in wordpress
**ADDING NAVIGATION MENU TO THE HAMBURGER IN WORDPRESS**

1. Login to the admin panel.

2. Go to Appearance Settings -> Menus

3. On the Edit Menus, Enter the Menu Name (Hamburger Menu) and click Create Menu.

4. On the Most Recent Pages on the left, select the Home (Front Page) and Blog (Posts Page)
	and Click Add to Menu.
	-Below, on Menu Settings, check both boxes: Auto add pages(Automatically add new top-level pages to this menu) and 
	Theme locations (Header Menu). Click Save Menu.

5. To add the rest of the menu items to the navigation, use the custon links as follows:
	Click on Custom Links and add the URL and the Link Text.
	
	MENU ITEMS
	>Link Text: Methods					URL: http://vagrantpress.dev/#methods				-->	Click Add to Menu
	
	>Link Text: Testimonials			URL: http://vagrantpress.dev/#testimonials			-->	Click Add to Menu
	
	>Link Text: Technologies			URL: http://vagrantpress.dev/#technologies			-->	Click Add to Menu
	
	>Link Text: Partners				URL: http://vagrantpress.dev/#partners				-->	Click Add to Menu
	
	>Link Text: Our Project				URL: http://vagrantpress.dev/#projects				-->	Click Add to Menu
	
	>Link Text: Supporters & Partners	URL: http://vagrantpress.dev/#partners				-->	Click Add to Menu
	
	>Link Text: Impressions				URL: http://vagrantpress.dev/#photo-impressions		-->	Click Add to Menu
	
	>Link Text: Sponsor a Project		URL: http://vagrantpress.dev/#register				-->	Click Add to Menu
	
	>Link Text: Register Project		URL: http://vagrantpress.dev/#register				-->	Click Add to Menu
	
	
6. Click Save Menu on the right.

7. All the menu you have added should be listed on the Menu Structure.

8. Drag each menu item into the order you prefer.

9. Click Save Menu.

10. Go to the Home Page and refresh. When you hover on the Hamburger Menu, all the Menu Items should show up.

# Our-projects page setup
1.Login to admin panel
2.Go to Add New Page with title as 'Project' and Update to save changes.
3.On the top-right corner on the Screen Options, check the Custom Fields box and update.
4.Enter New Custom Fields  and their respective valuesat the bottom as follows:

Custom Field        Values
backlog_board       (information needed for this column)
sprint_board        (information needed for this column)
done_board          (information needed for this column)

-Click update to register the changes.
-Refresh the site to see the updated Our Projects section.


# Setting up page-navi plugin
1. turn plugin on
2. under settings>pageNavi you can change the settings 
3. change the settings:
Text For Number Of Pages: empty
Text For Current Page: %PAGE_NUMBER%
Text For Page: %PAGE_NUMBER%
Text For First Page: empty
Text For Last Page: %TOTAL_PAGES%
Text For Previous Page: <
Text For Next Page: >
Text For Previous: ...
Text For Next: ...

Use pagenavi-css.css: yes
Page Navigation Style: normal
Always Show Page Navigation: no
Number Of Pages To Show: 4
Number Of Larger Page Numbers To Show: 0
Show Larger Page Numbers In Multiples Of: 10


4. safe the settings
5. refresh the blog page and you're finished

# Setting up recent posts-plugin
**HOW TO SET UP THE RECENT POSTS EXTENDED PLUG-IN**

1. in the widget setting area, access the plug-in settings  
2. in the middle sidebar widget edit the title of the post to "RECENT POSTS"
3. uncheck the "Use Default Styles" check-box.
4. delete all the custom css styling provided in the styling box. this will not be needful in the styling.
5. set the number of posts to be shown to the desired number of posts.
6. set the dimensions of the thumbnail to 250 pixel to 300 pixels.
7. align the thumbnail to the right, in the drop down options.
8. uncheck the Display Excerpt check-box.
9. uncheck the Display Date check-box.
10. click the save button.
11. refresh the web page and voila!!

# Setting up newsletter plugin
> Login as admin and go to Plugins>Installed Plugins list and activate the Newsletter Plugin.

>Click on the Newsletter Item that appears on the left side of the admin panel to get into the Dashboard.

>On the tabs on the top section of the dashboard, (Subscribers, List Building, Newsletters and Settings), 
hover on the List Building and on the dropdown that appears, click on the Subscription Form Fields.

>This opens the SUBSCRIPTION FORM FIELDS AND LAYOUT page, make some adjustments on the first tab: 
the Main Profile Fields, as follows:

		~On the Email Field Label change it to: Email Address...
		
		~On the Name or First Name Field Label change it to: Name...
		 and on When to Show dropdown, select 'Even on subscription Forms'
		
		~Skip the Last Name and Sex/Gender.
		
		~On the Button Labels change the Subscription Button to SUBMIT. (In Caps).
		
		~Skip the Privacy box, go down and click the Save button to apply the changes.
		
>Click on the Extra Profile Fields tab if you wish to make more fields, in our case we won't.

> On the last tab at the end, Form Style, ensure all the styles are set to 'none'. 
(Subscription form style and Widget style).

>Hover on the Appearance Item on the left side of the admin panel and click on the Widgets option from the dropdown.

>You will be able to see the Newsletter widget on the Available Widgets. Drag this widget to
the Bottom sidebar on the far right.

>Edit the Title of the Widget to SUBSCRIBE (In Caps), and click Save.

>Go back to the blog section and refresh the page and you will have the newsletter subscription
widget positioned well below the Recent Posts widget as in the design.

#How to improve the URL structure
#Improving the URL Structure for the SEO friendliness

1. Login to the wp-admin. Username: admin		Password: vagrant

2. On the dashboard, go down and point at setting and click on the Permalinks.

3. On the Permalinks page, Common settings, select Custom Structure.

4. On the text box in front of the Website URL, add:
   /blogs/%postname%/
   
   blogs   -The blog posts page.  
   %postname%  -The post title of the blog post.
 
   
5. Once you do this, click on the Save Changes Button at the bottom.
6. Refresh the blogs page to see the changes in the URL structure.
	
	
	







    
