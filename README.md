# Wunderman Assessment Drupal 8


This project template provides a starter kit for managing your site
dependencies with [Composer](https://getcomposer.org/).

## Getting started

You will need (Git)[https://git-scm.com/] as well as you need to [install composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx).

Fork the respository

Then clone the forked repository

Inside the directory on the forked repository, run `composer install`

This will install Drupal and all its dependencies.

### Starting the PHP server

```
 cd web

 php -S localhost:8000
```

Visit http://localhost:8000 and install Drupal to begin.

## The assessment

In this assessment, we are going to build a [Hackernews](https://news.ycombinator.com) clone.

Write a custom module that periodically fetches the latest news items from the hacker news API.

The documentation for the API can be found her: https://github.com/HackerNews/API

Your module should:

* Fetch the news items periodically
* Create and attach the news item to the appropriate taxonomy e.g. story, comment, ask, poll etc
* You should also fetch all the comments associated to the news item and add them as a comment to your content type.
* Create a view that displays the content as per the hacker news site with the associated detail page that includes the item's comments.


### Bonus points

* Create a custom theme for your site.
* Style your site to look like the hacker news site.

### Considerations

* Initially, your module should only fetch the top 500 and build from there, there is no need to go much further than that.
* Use of Drupal's entity API is strongly encouraged.
* You can submit your Database via Dropbox, wetransfer or any other online storage provider you prefer, simply add the link to the file to the end of the readme of your forked repo.


---- Alfred Additions--------
- The site runs as per initial instructions above
- Have implemented hacker_news module which fetches news items and displays on the front page
- To manually run the module goto localhost:<port-number>/news/hack(This will import 500 items and some related taxonomy)
- Uses time_table cron module to fetch after every 5 minutes
- site login details: admin:letmein

Link to the database 
https://www.dropbox.com/s/yebo8kwl78vnvzh/drupal_hack.sql?dl=0



