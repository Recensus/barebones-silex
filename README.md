Barebones Silex
===============

This is a basic start for a [Silex](http://silex.sensiolabs.org/) PHP website.  It comes 
pre-configured for use with [Doctrine 2](http://www.doctrine-project.org/projects/orm.html), 
although no entity manager is set up at the time of this writing.

It also comes with git submodules for [Twitter Bootstrap](http://twitter.github.com/bootstrap) 
and [Font Awesome](http://fortawesome.github.com/Font-Awesome/).  Oddly enough, I forgot to 
include jquery (or link to a site that hosts it) so that will come in future commit.

There are three branches.  The master, which does not have a templating engine, template-twig 
for [Twig](http://twig.sensiolabs.org) powered templates, and template-phpengine for using 
straight PHP for templates.


Installation
------------

To install, you will need to use [Composer](http://www.getcomposer.org).  The vendor directory 
will be created for you.
