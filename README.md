# Buffer

Buffer is a context-aware implementation of explode(), the string function from PHP.

## Installation

Open up your terminal, `cd` to your project directory and type:

```shell
# run this command if you have Composer installed globally on your machine
composer require "ilya/buffer:~1"

# or run this command if you have it installed locally
php composer.phar require "ilya/buffer:~1"
```

Press `Enter` and give Composer just a second to install the package as your project's dependency.

## How to use this thing

Let's get started by creating an instance of Buffer:

```php
$buffer = new Buffer\Buffer('foo:"bar:baz":wow');
```

Now, tell Buffer that the `"` character has a special meaning:

```php
$buffer->beAwareOf("\"");
```

Finally, split the string you've passed to the constructor by `:`:

```php
$buffer->explode(':'); // => ['foo', 'bar:baz', 'wow']
```

Alright, that's basically it.

## License

Buffer is licensed under the MIT license.
