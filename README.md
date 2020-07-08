# DevOps-Pills Blog Site


# Description

this is a wordpress theme divided in php files based on the wordpress template hierarchy. Using Php as the main programming language, bootstrap as a css framework and Jqwery for the page interactivity.

# Files used in this project:

# Main:
1.index.php
2.front-Page.php
3.home.php
4.header.php
5.footer.php
6.functions.php
7.single.php

# Styles:
onSourceFolder/
styles.css (default).

assets/
 styles.css
 blog.css
 
 # Javascript:
   app.js  
 
 


# 1. index.php

This is the main file and it is mandatory for wordpress themes, in here we have the main wordpress loop to display the entries correctly.


# 2. front-page.php

It is as Its name says, the front, static and presentational page of Dev-Ops-Pills, here we display the authors, the main navigation menu and contact section.


# 3. home.php

Here is where all the entries of the blog are displayed in order of creation, on the side is the advertisement sidebar and It gives us the access to the single page of each post that is published on the blog


# 4. header.php, 5. footer.php 

 In this files are displayed dinamically the header and the footer of the page, also we have introduced there the main links to connect our php code with the styles and the   javascript files.
 
 
 
 # 6 functions.php
 
  functions.php has all the logic of the project, here we create our routes to the styles and js files, all the arrays that we need to display isolated items and the imports and   exports of the files that we need to chain for the creation of our final result.
  
  # 7 single.php 
  
  This is the page that defines the look of all of the post that are published on our blog.
  
 # Styles:

 styles.css: Here are the global styles that are applied to the blog and its pages in general.
 
 blog.css: This file contains the specific styles that are applied to the blog/home page of the project.
 
 # Javascript:
 
 app.js: Here is defined the smooth scrolling function. Also here are functions that are taking care of the categories links and the correct displaying of the navigation menu items, throught the website.    
  




