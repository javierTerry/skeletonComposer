# Chrisitan Hernandez 

Proyecto integracion teamwork 


* Se usa la integracion de un proyecto independiente

Use [packagist](https://github.com/javierTerry/MNTrait.git) - put this in your `composer.json`

    {
        "require": {
            "javierTerry/MNTrait": "dev-master",
        }
    }

Version 0.1 (July 30th, 2015)
=======================================

Para uso del proyecto se debe de tener la [api key](http://developer.teamwork.com/enabletheapiandgetyourkey). del administrador de TeamWork.

Así como la URI de nuestro Dashboard, Example (https://personal69.teamwork.com/)

Los recursos disponibles son:

* GET /companies.json
* GET /people.json
* GET /projectCategories.json
* GET /tags.json
* GET /projects.json
* GET /expenses.json
* GET GET /milestones.json?find=[all|completed|incomplete|late|upcoming]
* GET /projects/{project_id}/tasklists.json
* GET /tasks.json
* GET /time_entries.json



GET /companies.json
----------------------------------
Regresa la lista de las compañias disponibles 

## Usage
```php
    require 'vendor/autoload.php';
	class MyTraitTest {
		use MNTrait\Comun\Response;
 	
		public function testResponse(){
			$this -> assertTrue(is_array($this -> __response()));
			
		}
	
	}
```