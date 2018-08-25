# At a Glance Card for Nova

[![Latest Stable Version](https://poser.pugx.org/nickfairchild/nova-at-a-glance-card/v/stable)](https://packagist.org/packages/nickfairchild/nova-at-a-glance-card)
[![Total Downloads](https://poser.pugx.org/nickfairchild/nova-at-a-glance-card/downloads)](https://packagist.org/packages/nickfairchild/nova-at-a-glance-card)
[![License](https://poser.pugx.org/nickfairchild/nova-at-a-glance-card/license)](https://packagist.org/packages/nickfairchild/nova-at-a-glance-card)

![alt text](https://i.imgur.com/NwL30YX.png "Nova At a Glance Card")

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require nickfairchild/nova-at-a-glance-card
```

Next up, you must register the card with Nova. This is typically done in the `cards` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function cards()
{
    return [
        // ...
        new \Nickfairchild\AtAGlance\AtAGlance,
    ];
}
```

To publish the config file to `config/at-a-glance.php` run:

```bash
php artisan vendor:publish --provider="Nickfairchild\AtAGlance\CardServiceProvider" --tag="config"
```

To add a resource to the card you need to add an option to the config file in the format `resource_slug => 'Model\Class'`
```php
return [
    'resources' => [
        'users' => 'App\User',
        'posts' => 'App\Post',
    ]
];

```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
