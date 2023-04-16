# Elena PHP Integration

This is a PHP library for integrating Elena api

## Installation

Use the package manager [composer](https://pip.pypa.io/en/stable/) to install.

```bash
composer require oscar-team/elena-php
```

## Usage

The API integration built with [Saloon](https://github.com/Sammyjo20/Saloon)

```php
require __DIR__ . '/vendor/autoload.php';

$connector = new \OscarTeam\ElenaPhp\ElenaApi('test');
$connector->withBasicAuth('username', 'password');

$request = new \OscarTeam\ElenaPhp\Requests\GetRegistrations();
$connector->send($request)->dto(); // gives you response as an DTO Objects
//or 
$connector->send($request)->json(); // gives uou response as an array
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)