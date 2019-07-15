# Wunderman Assessment Drupal 8


This project template provides a starter kit for managing your site
dependencies with [Composer](https://getcomposer.org/).

## Usage

First you need to [install composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx).

> Note: The instructions below refer to the [global composer installation](https://getcomposer.org/doc/00-intro.md#globally).
You might need to replace `composer` with `php composer.phar` (or similar)
for your setup.

After that you can create the project:

```
composer create-project drupal-composer/drupal-project:8.x-dev some-dir --no-interaction
```

With `composer require ...` you can download new dependencies to your
installation.

```
cd some-dir
composer require drupal/devel:~1.0
```

The `composer create-project` command passes ownership of all files to the
project that is created. You should create a new git repository, and commit
all files not excluded by the .gitignore file.

## What does the template do?

When installing the given `composer.json` some tasks are taken care of:

* Drupal will be installed in the `web`-directory.
* Autoloader is implemented to use the generated composer autoloader in `vendor/autoload.php`,
  instead of the one provided by Drupal (`web/vendor/autoload.php`).
* Modules (packages of type `drupal-module`) will be placed in `web/modules/contrib/`
* Theme (packages of type `drupal-theme`) will be placed in `web/themes/contrib/`
* Profiles (packages of type `drupal-profile`) will be placed in `web/profiles/contrib/`
* Creates default writable versions of `settings.php` and `services.yml`.
* Creates `web/sites/default/files`-directory.
* Latest version of drush is installed locally for use at `vendor/bin/drush`.
* Latest version of DrupalConsole is installed locally for use at `vendor/bin/drupal`.
* Creates environment variables based on your .env file. See [.env.example](.env.example).

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
