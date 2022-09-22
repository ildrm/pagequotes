# Welcome to Page Quotes!

Use `PageQuotes` to initial the configuration and use `printQuotes` to print the quotes:
```php
$quotes = [
	'quotes' => [
		'page1' => [
			'Quote1', 'Quote2'
		]
	]
];

$q = new  PageQuotes($quotes);
return  $q->printQuotes('page1');
```
