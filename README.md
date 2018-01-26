
tarnam/pages
======
- This package compatible with Laravel `>=5` 
- this package for builder new page in admin panel

`   copy into composer.json

    "require": {
        "tarnama/pages" : "dev-master"
    },`
    
then Run the Composer update in comand

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

copy `php artisan vendor:publish --provider="Tarnama\Pages\PagesServiceProvider" --tag=migrations --force` in comand
      `php artisan migrate`  
      
url => http://site-name.com/page for manage pages
