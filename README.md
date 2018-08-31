# Laravel Nova HTML View Field 

This field allows you display custom HTML in Laravel Nova, be it a link, an image or any other piece of proper html.

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require treestoneit/html
```

## Usage

Add the field to your resource in the ```fields``` method:

```php
use Treestoneit\Html\Html;
...
...
Html::make('Track',function (){
                $link = "<a class='text-70' target='_blank' href='$this->tracking_link'>";
                $link .= "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" class='fill-current' viewBox=\"0 0 20 20\"><path d=\"M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z\"/></svg>";
                $link .= "</a>";
                return $link;
            })
```

If you have proper html saved in the database or cast by your model to HTML

```php
use Treestoneit\Html\Html;
...
...
Html::make('Your Field Label','your_field')
```

Please note: _Only Index and Detail version of the field is configured_