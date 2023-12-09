# Install
```bash
composer require krzysztofzylka/strings
```

# Methods
## Escape string
```php
\Krzysztofzylka\Strings\Strings::escape('string')
```
## Undo escape string
```php
\Krzysztofzylka\Strings\Strings::undoEscape('escaped string')
```
## Lowercase and clean string
```php
\Krzysztofzylka\Strings\Strings::lowerCleanString('string')
```
## Cleans the given string by removing all non-alphanumeric characters and replacing spaces with dashes.
```php
\Krzysztofzylka\Strings\Strings::clean('string')
```
## Get first x words
```php
\Krzysztofzylka\Strings\Strings::substrWithoutLastWord('word1 word2 word3', 10)
```
## Remove line breaks
```php
\Krzysztofzylka\Strings\Strings::removeLineBreaks('string')
```
## Camelize
```php
\Krzysztofzylka\Strings\Strings::camelizeString('string')
```
## Decamelize
```php
\Krzysztofzylka\Strings\Strings::decamelizeString('string')
```