Fresh Site Template Files
==========================


### Important Notes
- You'll need to have PHP in order to make this site work. You can either use a web server like the PSU web space or get PHP running on your own system by enabling it in MacOS or installing MAMP.
- File sizes can get out of hand. Make sure that everybody is submitting image files that are suitably compressed and at the exact dimensions you need for your design.
- For any changes you've made to the code base, especially the javascript, please make note of it in the CHANGELOG so that students in future terms can see what is new and why it was done.
- Please delete any files you see that you are not using, including old images and scripts. We can get them back if you accidentally delete something you're not supposed to.



### File Structure
#### index.php
This is the home page for the site. It's mostly just a skeleton that uses the **include** function (eg. `include 'header.php';`) in order to load up individual parts of the site from other files. The include function essentially loads the content of whatever file is mentioned and inserts it into that spot when a viewer views the page. 

There is not much to change here but it's important to update all term-specific info in this file before launching.


#### header.php
Header has become a weird file that basically just holds meta tags and links to CSS/JS. I'm not sure why it was done this way. ¯\\_(ツ)_/¯


#### footer.php
This file actually contains the content at the bottom of the page, as well as the javascript necessary to control the side panels.


#### scripts.php
This file contains links to all of the necessary javascript files that need to be loaded on every page. Kinda similar to how header.php is being used, but maybe more sensible. Please remove any links to scripts you aren't using and delete those scripts!


#### grad.php
This file essentially will load up a specific student page based on whoever's name is in the browser URL (as represented by `$_GET["name"]`). It will look through all of the students in the 'students' folder and find the first folder that matches that name. You may need to copy and paste some code near line 28 to include your term's folder in the search.


#### students folder
Every terms' students need to put all of their work into a folder named `firstname-lastname`, all lower case and no special characters. All of these folders should have an index.php file, as well as all necessary images to show that student's work. See previous terms for examples.


#### [term]/grad-tiles.php
Each term needs a grad-tiles.php file to create the grid of student images ont he home page and in the archive. It needs to be updated with all of this term's students, but it's important you don't change the structure of this file so that it maintains consistency with previous terms.
