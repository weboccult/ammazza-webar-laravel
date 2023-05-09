# ammazza-webar-laravel
Incorporate the ammazza-webar-laravel plugin in any of the laravel project

Step 1 : Add below code root of composer.json file 

	
    "repositories": [
       
        {
            "type": "vcs",
            "url": "https://github.com/weboccult/ammazza-webar-laravel.git"
        }
    ],
  

Step 2 : Intall package using below name in project root terminal 


**composer require weboccult/tryon**



Step 3 : Publish Assets for ammaza plugin by run below command

php artisan vendor:publish --tag=public --force

Step 4 : Add client id in your project .env file 

AMMAZZA_CLINET_ID=YourClientId

Don't forgot to run clear cache once changes in env file 

php artisan cache:clear
php artisan config:clear
php artisan o:c


Step 5: Now add ammaza scripts and style to your view file where want to add try on button 

		<link rel="stylesheet" href="{{ asset('css/ammaza-tryon-style.css') }} "/>
        <script src="{{ asset('js/ammaza-tryon-scripts.js') }} "></script>

Step 6: Add try on button using below code in view or controller 

	
    {!! app('trynow')::getTryOn()!!}

	
By default it will load all products for client id. If you want to show custom products pass product id as below 
	
   
	{!! app('trynow')::getTryOn("YourProductId")!!}

