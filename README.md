```
__________.__          ___________.__  .__       .__        
\______   \  |__ ______\_   _____/|  | |__|__  __|__|______ 
 |     ___/  |  \\____ \|    __)_ |  | |  \  \/  /  \_  __ \
 |    |   |   Y  \  |_> >        \|  |_|  |>    <|  ||  | \/
 |____|   |___|  /   __/_______  /|____/__/__/\_ \__||__|   
               \/|__|          \/               \/          
                                        Elixir Watch Command
```

Provides the ability to watch changes in specified files or folder and automatically run elixir.

This package has been developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).

## Pre-install requirement

This package requires ext-inotify which can be installed by:

`$ pecl install inotify`

You will likely need to enable this extension. You can use the following (may not match your specific OS settings).

`$ echo "extension=inotify.so" | sudo tee /etc/php/7.1/mods-available/inotify.ini && sudo ln -s /etc/php/7.1/mods-available/inotify.ini /etc/php/7.1/cli/conf.d/20-inotify.ini`

## Install

Via composer:

`$ composer require-dev bluora/laravel-php-elixir-watch ~3.0`

Enable the service provider by editing config/app.php:

```php
    'providers' => [
        ...
        Bluora\PhpElixirWatch\ServiceProvider::class,
        ...
    ];
```

## Configuration

Watch configuruation item is only used by the elixir:watch console command.

In your elixir yaml configuration file, add `watch` and list each of the folders you want to automatically run the elixir command.


```yaml
watch:
    - PATH_RESOURCES?filter=!php
```

## Contributing

Please see [CONTRIBUTING](https://github.com/bluora/laravel-php-elixir-watch/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/bluora/laravel-php-elixir/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/bluora/laravel-php-elixir-watch/blob/master/LICENSE) for more information.
