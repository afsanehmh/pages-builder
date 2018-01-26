
tarnam/pages
======
- This package compatible with Laravel `>=5` 
- this package for builder new page in admin panel

Run the Composer update comand

    $ composer require tarnama/pages

In your `config/app.php` add `'Tarnama\Pages\PagesServiceProvider::class,'` to the end of the `$providers` array

```php
'providers' => [
     Tarnama\Pages\PagesServiceProvider::class,

],


'alias' => [
    ...
    'Pages' =>Tarnama\Pages\PageFacade::class,
]
```

usages

url => http://site-name.com/page for manage pages
