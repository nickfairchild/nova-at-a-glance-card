# At a Glance Card for Nova

[![Latest Stable Version](https://poser.pugx.org/nickfairchild/nova-at-a-glance-card/v/stable)](https://packagist.org/packages/nickfairchild/nova-at-a-glance-card)
[![Total Downloads](https://poser.pugx.org/nickfairchild/nova-at-a-glance-card/downloads)](https://packagist.org/packages/nickfairchild/nova-at-a-glance-card)
[![License](https://poser.pugx.org/nickfairchild/nova-at-a-glance-card/license)](https://packagist.org/packages/nickfairchild/nova-at-a-glance-card)

![alt text](https://i.imgur.com/NwL30YX.png "Nova At a Glance Card")

This Nova card displays a count for all of your resources.

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

### Customize

If you do not want a specific resource to be displayed on the card you can pass through an array of the resource classes to exclude like so.
```php
public function cards()
{
    return [
        // ...
        (new \Nickfairchild\AtAGlance\AtAGlance)->excludeResources([Pages::class]),
    ];
}
```

## Bugs / Issues / Ideas

Please create an issue using the [issue tracker](https://github.com/nickfairchild/nova-at-a-glance-card/issues) or drop me an email.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
