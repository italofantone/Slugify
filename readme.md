Italomoralesf/Slugify
=============

> Converts a string into a slug - Package based on cocur/slugify.


Features
--------

- Remove special characters
- You can install in [Laravel](http://laravel.com)
- Does not need external dependence

Installation
------------

You can install using [Composer](https://getcomposer.org):

```shell
$ composer require italomoralesf/slugify
```

Usage
-----

Generate a slug:

```php
use Italomoralesf\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->render('Hello World!'); // hello-world
```

You can also change the separator used by `Slugify`:

```php
echo $slugify->render('Hello World!', ['separator' => '_']); // hello_world
```
### More options

- `['regexp' 	=> 'your regular expression']`
- `['separator' => '-']`
- `['lowercase' => true]`

### Laravel

You can use this package in Laravel.

Register the service provider in `app/config/app.php`:

```php
'providers' => array(
    "Italomoralesf\Slugify\Bridge\Laravel\SlugifyServiceProvider",
)
```

And add the facade into the "aliases" array:

```php
'aliases' => array(
    "Slugify" => "Italomoralesf\Slugify\Bridge\Laravel\SlugifyFacade",
)
```

You can then use the `Slugify::render()` method in your controllers:

```php
$url = Slugify::render('welcome to the homepage');
```

Support
-------

Need help? [Twitter](https://twitter.com/italomoralesf) 

You can always help, 
[send me a dollar or two](https://www.paypal.me/RimorsoftOnlineEC/2).