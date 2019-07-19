# Hitch & Sparrow Website Read Me
by Brad Siefert
Last update: 2019-07-19

## Overall Thoughts
- The site is using Bootstrap v3.3.5
- Originally was on October CMS and transferred to using Wordpress v5.x in July 2019
- Wordpress production can be really tricky and complicated. My goal in making this site was to use as few plugins as possible and to create as few dependancies as possible.
- I did create a custom block for the blog that I hope will make adding blog posts very easy. 
- Each page has a custom template that can be found in the "page-templates" folder in the theme folder. 
- On the pages that have a slider, I do something that's a bit odd, but I couldn't find another way (at the time) to 
accomplish what I was looking for. I wanted for the images to be in a slider on the desktop version of the site, but 
on mobile, simply stacked on top of each other. I did this by displaying and hiding for the different page settings. 
You'll see that the images are called twice through a partial, but I've been assured that this won't effect page speeds. The image only needs to be downloaded from the server once. I'm using "flexslider" which honestly, the only reason I'm using it is because it worked really simply for me out of the box, and I didn't (and don't) really know Javascript well enough to make my own.
- The site uses Didot and Gotham typefaces that are included in the theme folder.
- The blog has a pretty odd design, but it's one that I really worked hard to create, and I generally love. My scrolling horizontally, it makes it so that you don't have to treat vertical images any different than horizontal images. One thing that happens with photography sites is, they have to take quite a bit of time combining vertical images for their blog because the web is much better fit for horizontal images. This layout was my way of dealing with the issue. I've updated the design to work with the Wordpress Gutenberg block paradigm, and I hope that it will be an easy way to update the site for a very long time to come.

## Local/Stage/Production Servers
There are 3 servers for this site:
My Local:     https://hitchandsparrowv3.test
Stage:        https://stagehands.dreamhosters.com
Production:   https://hitchandsparrow.com

- Stage is mostly important during the development process so that I can work on the site without messing with what's 
live on the internet. 
- Once the production site is live and ready, we'll only be publishing blog posts to that site. If we ever need to go back and work on the site, we'll need to migrate the blog posts **BEFORE** starting production. This will make it easier to push and pull migrations back and forth. 

## Migrate DB Plugins
- To make it easy to push changes from Local to Stage, I've been using a plugin called "Migrate DB"
- To get to the migration, in the left sidebar of Wordpress click Tools / Migrate DB. Read the docs for how to do either a push or pull depending on which site is most up to date. 
- More info: https://github.com/wp-sync-db/wp-sync-db and https://github.com/wp-sync-db/wp-sync-db-media-files
- There are a couple of issues I've found that break whenever I do a migration. Jetpack acts as if I've never set it up
before. I'm not sure how to fix it. 

#### Pushing from local (https://hitchandsparrowv3.test) to stage (https://stagehands.dreamhosters.com)
1. Re-connect Jetpack to Anthony's Jetpack account
2. TBD...  

## Wordpress Custom Gutenberg Block Plugin

## Posting a New Blog Post to the site
I've created a custom, reusable block in Wordpress to help make creating blog posts easier. It combines a custom block plugin I created, and a list into a group. It's **very** important you use this block I made or the blog posts won't  look the way I've designed them to look.

1. Create a new post by clicking "Add New" or Choose a blog post to edit.
2. Add the blog's title in this format "Bride & Groom" (order the names alphabetically).
3. Click the plus button just below the title to add a new block.
4. Choose and add the block "H&S Blog Post Details" It should be under the "Most Used" section. Be sure **not** to choose the H&S Blog Block (with the camera icon.).
5. Click the 3 dots at the top of the block to reveal more options. Choose "Convert to Regular Block".
6. Input the details of the blog post. Add select vendors at the bottom in the list block. (optional)
7. Click the plus button toward the bottom left to add a new Gallery block. (Ignore the plus button on the right side.)
8. Upload or drag images to the media block to add them to the post.
9. On the right sidebar, under the Document tab, choose the publish date.
10. On the right sidebar, under the Document tab, choose a featured image.
11. Review and post the blog post.

