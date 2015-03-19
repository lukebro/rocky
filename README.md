# rocky
`rocky` is basic framework which uses a model-view-controller architectural pattern to easily create user inerfaces for web apps.

## Model
All models are contained in the `model/` folder.  The naming convention used for all models is as follows: `[model_name]_model.php`.  A models has access to a PDO object which allows querying any databases.
A sample model:
```php
// sample_model.php
class Sample_Model extends Model
{
	private $_var;
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function getVar()
	{
	  return $this->_var;
	}
}
```

## View
All views are contained in `view/` folder.  Each folder is a view with each individul file being a different state of that view. Ex. `view/home/index.php` & `view/home/error.php`.

## Controller
```php
//sample.php
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
}
```
