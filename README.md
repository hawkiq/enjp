![Omygitto](https://i.makeagif.com/media/8-17-2024/dDjzav.gif)

# Enjp

Enjp is a Laravel package for converting English text to Japanese romaji. This package provides an easy-to-use function for transliterating English text to its Romanized Japanese representation.

## Requirements

- PHP 7.3 or higher.
- Composer for dependency management.

## Installation

You can install the package via Composer from Packagist. Run the following command in your Laravel project:

```bash
composer require hawkiq/enjp
```

## Usage

### Using the Static Method

You can use the package via a static method in your application. Here’s how:

1. **Import the Class**

   In your controller or route, import the `Enjp` class:

   ```php
   use Hawkiq\Enjp\Enjp;
    ```
2. **Call the Static Method**
    Use the romanji method to convert English text to romaji:

    ```php
    $result = Enjp::romanji('Adventure Island');
    echo $result;  // Outputs: Adobenchāairando
    ```
3. **Using the Helper Function**
    The package also provides a global helper function for convenience. Here’s how to use it:
    ```php
    $result = enjp('Adventure Island');
    echo $result;  // Outputs: Adobenchāairando
    ```
## License

This project is Public feel free to pull request any changes.

## Copyright

-  Eng. OsaMa  [Website](https://osama.app) .