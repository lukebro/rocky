# rocky
`rocky` is basic framework which uses a model-view-controller architectural pattern to easily create user inerfaces for web apps.

## Model
All models are contained in the `models/` folder.  The naming convention used for all models is as follows: `[model_name]_model.php`.  A models has access to a PDO object which allows querying any databases.
A sample model:
```php
// models/sample_model.php
class Sample_Model extends Model
{
	private $_var;
	
	function __construct()
	{
		parent::__construct();

		$this->_var = "Hello world";
	}
	
	public function getVar()
	{
	  return $this->_var;
	}
}
```

## View
All views are contained in `views/` folder.  Each folder is a view with each individul file being a different state of that view. Ex. `view/home/index.php` & `view/home/error.php`. The view can only read data from variables set in the View object `_view` by parent controller.

```php
// views/sample/index.php
<h1>Default Sample</h1>
<p>This is a sample. Variable passed: <?= $this->var ?>.</p>

// views/sample/alert.php
<h1>Alert</h1>
<p><strong><?= $this->msg ?></strong></p>
```

## Controller
All controllers are contained in `controllers/`.  Each controller controls one page only.  URL is passed into contorller allowing for many different states.  Ex. `http://example.com/sample/alert/hi` will use the controller `sample` running the function `alert` and passing "hi" as an argument. If no function is specificed it default to `index`.

```php
// controllers/sample.php
class Sample extends Controller
{
	function __construct()
	{
		parent::__construct($this); // pass controller to parent
	}

	function index()
	{
		$this->loadModel('sample'); // sample_model is loaded
		$this->_view->var = $this->_model['sample']->getVar(); // var is passed into view

		$this->_view->_title = 'Sample'; // set view page title
		$this->_view->render($this->_controller_name . '/index'); // render current controllers default view
	}

	/*
	* Passes message to view which view prints.
	* @param String
	*/
	function alert($message)
	{
		$this->_view->msg = $message;

		$this->_view->_title = $message;	
		$this->_view->render($this->_controller_name . '/alert');
	}
}
```

## Validate
A validate file under `libs/` contains a static function for token validating to prevent [CSRF attack](http://en.wikipedia.org/wiki/Cross-site_request_forgery).  It also contains a `filter(<string>, [pattern])` function for sanitizing user inputs.

```php
if(Validate::isTokenValid($_SESSION['token']))
	// ok
else
	// not ok
```
```php
echo Validate::filter("h@&e(llo#$$#@"); // prints "hello"
```

## Debug
A debug objects in `libs/` that contains a useful function for debugging.  The function `checkArray(<variable>)` kills the pages and prints out the array/variable in a readable format.

```php
$test = array(array("test" => "test", "test"), "test" => "test");
Debug::checkArray($test);
/*
* Prints out:
--START DEBUG--
Array
(
    [0] => Array
        (
            [test] => test
            [0] => test
        )

    [test] => test
)
--END DEBUG--
* 
/*
```

# :)