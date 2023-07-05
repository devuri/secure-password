# Secure Password Generator

Secure Password Generator is a PHP package that allows you to generate cryptographically secure passwords and passcodes.

## Installation

You can install the package using [Composer](https://getcomposer.org/). Run the following command:

```bash
composer require devuri/secure-password
```

## Usage

### Generating a Password

To generate a password, you can use the `PasswordGenerator::generatePassword()` method. By default, it generates a password with a length of 8 characters and includes special characters.

```php
use Urisoft\PasswordGenerator;

$password = PasswordGenerator::generatePassword();
echo "Generated Password: $password" . PHP_EOL;
```

You can customize the length and inclusion of special characters by providing optional arguments:

```php
$password = PasswordGenerator::generatePassword(12, false);
echo "Generated Password (without special chars): $password" . PHP_EOL;
```

### Generating a Passcode

To generate a passcode consisting of only digits, you can use the `PasswordGenerator::generatePasscode()` method. By default, it generates a passcode with a length of 6 digits.

```php
$passcode = PasswordGenerator::generatePasscode();
echo "Generated Passcode: $passcode" . PHP_EOL;
```

You can customize the length of the passcode by providing an optional argument:

```php
$passcode = PasswordGenerator::generatePasscode(8);
echo "Generated Passcode (8 digits): $passcode" . PHP_EOL;
```

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please feel free to open an issue or submit a pull request.

## License

This package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Credits

Secure Password Generator was developed by [Uriel Wilson](https://github.com/devuri).
