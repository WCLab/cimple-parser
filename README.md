### How to use

* Include parser class
```php
require_once "inc/parser.php";
```

* Instance parser class
```php
$parser = new Parser;
```

* Call to parse method ($view, $array_data, return)
```php

//This produce an echo of index.php view
$parser->parse("index",array());


// More usable than last one...
$data = [
	"name"=>"John",
	"last" => "Connor",
];

//returns index as html string.
$mod["content"] = $parser->parse("index",$data,true);

//parse index view into site view, and send to the screen
$parser->parse("site",array_merge($data,$mod));
```

### Issues

It's necessary to include parse class, instead of that use autoloaders.