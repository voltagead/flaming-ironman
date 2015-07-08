
# PHP Standards

To match WordPress convention, we should adhere to the [WordPress PHP Coding Standards](https://make.wordpress.org/core/handbook/coding-standards/php/). 

No Shorthand PHP Tags: `<?=$var ?>` or `<? function() ?>`

Remove trailing whitespace at the end of each line of code.

Omitting the closing PHP tag at the end of a file is preferred. If you use the tag, make sure you remove trailing whitespace.

Put spaces on both sides of the opening and closing parenthesis of `if`, `elseif`, `foreach`, `for`, and `switch` blocks: `if ( $conditional )`

When referring to array items, only include a space around the index if it is a variable:
```php
$x = $foo['bar']; // correct
$x = $foo[ 'bar' ]; // incorrect
```

Always use underscore (snake) notation:
```php
$this_is_correct;
$thisIsIncorrect;
```

Files should be named descriptively using lowercase letters. Hyphens should separate words.

Else/elseif statements should be on the same line as the closing bracket:
```php
if ( function_call( $parameter ) ) {
	// ...
} else {
	// ...
}
```

Logic statements outside templates use braces syntax:
```php
if ( function_call( $parameter ) ) {
	// ...
}
```

Logic statements instead templates use colon syntax:
```php
if ( function_call( $parameter ) ):
	// ...
endif;
```

Note that requiring the use of braces (or colons) just means that *single-statement inline control structures are prohibited*.

When doing logical comparisons, always put the variable on the right side, constants or literals on the left ([yoda conditions](https://make.wordpress.org/core/handbook/coding-standards/php/#yoda-conditions)):

```php
if ( true == $the_force ) {
	$victorious = you_will( $be );
}
```

For associative arrays, values should start on a new line. Note the comma after the last array item: this is recommended because it makes it easier to change the order of the array, and makes for cleaner diffs when new items are added.

```php
$my_array = array(
	[tab]'foo'   => 'somevalue',
	[tab]'foo2'  => 'somevalue2',
	[tab]'foo3'  => 'somevalue3',
	[tab]'foo34' => 'somevalue3',
);
```

*In general, readability is more important than cleverness or brevity.*


## To Do

- `.editorconfig`
- Set up PHPLint


