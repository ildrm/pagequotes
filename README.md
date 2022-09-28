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

How to use it in Laravel/Lumen:
Note: This is a simple example that shows how to use the code but it is suggested to use it in the controller
```php
Route::get('/test1', function () {
    $quotes = [
        'quotes' => [
            'page1' => [
                'Quote1', 'Quote2'
            ]
        ]
    ];
    
    $q = new PageQuotes($quotes);
    return $q->printQuotes('page1');
});

Route::get('/test2', function () {
    $quotes = [
        'quotes' => [
            'page1' => [
                'Quote1', 'Quote2'
            ]
        ]
    ];
    
    $q = new PageQuotes();
    $q->init($quotes);
    return $q->printQuotes('page1');
});
```
