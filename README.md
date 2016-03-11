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

> TODO: documentation

Patches & Features
------------------

* Fork
* Mod, fix
* Test - this is important, so it's not unintentionally broken
* Commit - do not mess with license, todo, version, etc. (if you do change any, bump them into commits of
their own that I can ignore when I pull)
* Pull request - bonus point for topic branches

To ensure your PRs are considered for upstream, you MUST follow the [CakePHP coding standards][standards].

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
