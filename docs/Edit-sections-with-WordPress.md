# Edit content through WordPress

*please keep in mind that wordpress is case sensitive, so use a capital when it's described in here* 

In this document will be explained how to change or place content in the different area's of the website. The sections that will be handled are: 
1. home section
2. agile and scrum
3. technologies 
4. photo impression
5. testimonials
6. Projects
7. suporters and partners
8. blog section home
9. contact

##### 1. home section
This section shows the animated illustration. To change this there should be uploaded a new media item and the link of this item  has to be placed in the homesection.php file. 

##### 2. agile and scrum
For the header and the paragraph there should be a page called 'Agile & scrum'. This page has to be a child of the home page. The title just picks the title of the page and the paragraph the content in the big textbox. 

The balloons have to be filled by filling in multible boxes, these can be found here:
**grid > Agile & scrum**

##### 3. technologies 
This section is not linked to wordpress yet and uses static HTML

##### 4. photo impression
The photo's can be set up by going to **grid > Photo Impressions**. Here you can select all the wanted images. Just play with it. 

*(currentlly its not clear for the user how the picture grid will look without checking on the desktop what it looks like.)*

##### 5. testimonials
For managing the testimonials you choose **testimonials** on the wp-admin side. There you can select the one you want to change or you can add one by clicking **add new**. The title should be clear for you, but isn't shown on the website,the content, client name and company name are shown on the website. Don't forget to setup an featured image to give the testimonial a face. 

##### 6. Projects
For setting up the title and paragraph for the projects you go to **grid > Projects**. The first field is for the title and the second is for the paragraph. 

For the lists on the board you go to **pages > project**. You can create a new page if it doesn't exist. There you can add 'custom fields'. As name you use: 
- backlog_board
- done_board
- sprint_board

Which are pretty self explainatory. If you want multiple items just separate them with an ','. For example: backlog, backlog

*(shouldn't it be more easy to put everything on a page and just use that title and content for the title and paragraph?)*

##### 7. suporters and partners
Currently only the title and paragraph are editable. You can do this by adding a page called Supporters & Partners and making it a child of the home page. The title will be the title of the section and the content the paragraph. 

*(currently the images are not editable through wordpress, maybe this would be nice for in the future?)*

##### 8. blog section home
This section automaticly shows the latest blogs that are added on the website.

To edit the title of the homepage blog section you go to **pages > blog**, you can create a new page if it doesn't excist, and you add a custom field with the name:
*home_blog_title*. The text you place in the field value will be shown. 

Don't forget to add a featured image on each blog inorder to make the blogs visible on the slider.

##### 9. contact
For the lists on the board you go to **pages > Register**. You can create a new page if it doesn't excist. The title is not shown on the website. In the contentbox you can paste the short code of the wanted contactform. 

Below the content box you'll find the 'custom fields. As name you can use:
- *title* -- for the first/small title
- *title-bold* -- for the second/bold title





