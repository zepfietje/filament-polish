[![Packagist Version](https://img.shields.io/packagist/v/zepfietje/filament-polish)](https://packagist.org/packages/zepfietje/filament-polish)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zepfietje/filament-polish)](https://packagist.org/packages/zepfietje/filament-polish/stats)

# Filament Polish

This package applies opinionated improvements to the Filament UI:

- Proper modal close button size.
- Proper table header sort icon size.
- Proper table text column font size.
- Table edit action without icon.
- Proper notification close button size.
- Sidebar without shadow.

## Installation

1. Install this package:
   ```bash
   composer require zepfietje/filament-polish
   ```
2. If you're using Filament outside the admin panel, [import the package CSS file](https://tailwindcss.com/docs/using-with-preprocessors#build-time-imports):
   ```css
   @import '../../vendor/zepfietje/filament-polish/resources/dist';
   ```
