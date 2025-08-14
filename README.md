# Progress indicators

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esagod/filaprogress.svg?style=flat-square)](https://packagist.org/packages/esagod/filaprogress)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/esagod/filaprogress/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/esagod/filaprogress/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/esagod/filaprogress/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/esagod/filaprogress/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/esagod/filaprogress.svg?style=flat-square)](https://packagist.org/packages/esagod/filaprogress)

The Progress Management Package for FilamentPHP provides a flexible and easy-to-use solution for tracking and visualizing progress within Filament admin panels. It includes custom Filament components for displaying linear and circular progress indicators directly in your admin interface. This package is designed to seamlessly integrate with Filament's existing tools, offering dynamic and customizable progress bars and circles to represent task completion, project milestones, or any metric that requires visual progress tracking. Perfect for enhancing the user experience in admin dashboards with intuitive, real-time progress displays.

## Support us

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://buymeacoffee.com/Esagod)

<a href="https://youtu.be/n9A5FUWPWO8" target="_blank">Youtube Video</a>

<br />

[![Total Downloads](https://raw.githubusercontent.com/filamentphp/filamentphp.com/dec76a6d43253f6e5947b3bcb99370c5a2509760/content/plugins/images/esagod-filaprogress.jpg)](https://packagist.org/packages/esagod/filaprogress)

## Installation

You can install the package via composer:

```bash
composer require esagod/filaprogress
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filaprogress-views"
```

## Usage

```php
// For infolist
use Esagod\FilaProgress\Infolists\Components\CircleProgressEntry;
use Esagod\FilaProgress\Infolists\Components\ProgressBarEntry;

return $infolist
    ->schema([
        CircleProgressEntry::make('circle')
            ->getStateUsing(function ($record) {
                $total = $record->items()->count();
                $progress = $record->countPaidItems();
                return [
                    'total' => $total,
                    'progress' => $progress,
                ];
            })
            ->hideProgressValue(),
        ProgressBarEntry::make('bar')
            ->getStateUsing(function ($record) {
                $total = $record->items()->count();
                $progress = $record->countPaidItems();
                return [
                    'total' => $total,
                    'progress' => $progress,
                ];
            })
            ->hideProgressValue(),

```

```php
// For table
use Esagod\FilaProgress\Tables\Columns\CircleProgress;
use Esagod\FilaProgress\Tables\Columns\ProgressBar;

return $table
    ->columns([
        CircleProgress::make('circle')
            ->getStateUsing(function ($record) {
                $total = $record->items()->count();
                $progress = $record->countPaidItems();
                return [
                    'total' => $total,
                    'progress' => $progress,
                ];
            })
            ->hideProgressValue(),
        ProgressBar::make('bar')
            ->getStateUsing(function ($record) {
                $total = $record->items()->count();
                $progress = $record->countPaidItems();
                return [
                    'total' => $total,
                    'progress' => $progress,
                ];
            })
            ->hideProgressValue(),
```

## Testing

```bash
composer test
```

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [esagod](https://github.com/esagod)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
