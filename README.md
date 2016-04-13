CakePHP Blocks Plugin
=====================

[![Build Status](https://img.shields.io/travis/ciricihq/cake-blocks/master.svg?style=flat-square)](https://travis-ci.org/ciricihq/cake-blocks)
[![Coverage](https://img.shields.io/coveralls/ciricihq/cake-blocks.svg?style=flat-square)](https://coveralls.io/github/ciricihq/cake-blocks)
[![Total Downloads](https://img.shields.io/packagist/dt/ciricihq/blocks.svg?style=flat-square)](https://packagist.org/packages/ciricihq/blocks)
[![License](https://img.shields.io/github/license/ciricihq/cake-blocks.svg?style=flat-square)](LICENSE.md)

A really simple plugin that allows you to manage and show small content blocks.

Install
-------

Using [Composer][composer]:

```
composer require ciricihq/blocks
```

You then need to load the plugin. You can use the shell command:

```
bin/cake plugin load Cirici/Blocks
```

or by manually adding statement shown below to your app's `config/bootstrap.php`:

```php
Plugin::load('Cirici/Blocks');
```

Usage
-----

There's a Trait that does all the job, and we've created a `BlockHelper` and a
`BlocksComponent` so you can use them easily on your CakePHP app.

> The reason for naming the helper in singular is because there's already a
`Blocks` class in CakePHP's views that would collide with our helper.

To start using them, just load whatever class you want.

For the `BlockHelper`, on your `AppView`'s initialize method, add:

```php
// src/View/AppView.php
public function initialize()
{
    $this->loadHelper('Cirici/Blocks.Block');
}
```

For the `BlocksComponent`, on your `AppController`'s initialize:

```php
// src/Controller/AppController.php
public function initialize()
{
    $this->loadComponent('Cirici/Blocks.Blocks');
}
```

### Methods

Right now there are just two methods available (as said, this plugin is really simple):

- `get`: retrieves the entire Block entity by its slug.
- `getContents`: just returns the Block's `content` field contents.


Patches & Features
------------------

* Fork
* Mod, fix
* Test - this is important, so it's not unintentionally broken
* Commit - do not mess with license, todo, version, etc. (if you do change any, bump them into commits of
their own that I can ignore when I pull)
* Pull request - bonus point for topic branches

Bugs & Feedback
---------------

http://github.com/ciricihq/cake-blocks/issues

License
-------

Copyright (c) 2016, [Cirici New Media][cirici] and licensed under [GNU GPL3 license][gnu].

[cakephp]:http://cakephp.org
[composer]:http://getcomposer.org
[gnu]:LICENSE.md
[cirici]:https://cirici.com
[standards]:http://book.cakephp.org/3.0/en/contributing/cakephp-coding-conventions.html
