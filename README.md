<p align="center"><img src="https://www.ammazza.me/wp-content/themes/demotheme/images/NewAssets/mockupv1.webp" width="50%" alt="Logo"></p>

## Introduction

- AMMAZZA is an out-of-box multi-utility product in the market of jewellery with the fusion of AR (Augmented Reality) + AI (Artificial Intelligence) + BI (Business Intelligence).
- By integrating Virtual Try-On feature, customers can try jewellery from anywhere anytime.
- Virtual Try-On is available for Facial and Hand jewelleries like Earrings, Necklace, Sets, Rings, Bracelets.

## Prerequisites

- **Requires [PHP 8.0+](https://php.net/releases/) | [Laravel 8.0+](https://laravel.com/docs/8.x)**

# ammazza-webAR-laravel
Incorporate the ammazza-webar-laravel plugin in any of the laravel project

Step 1 : Add below code in the composer.json file of the laravel project 

    "repositories": [
       
        {
            "type": "vcs",
            "url": "https://github.com/weboccult/ammazza-webar-laravel.git"
        }
    ],
  
Step 2 : Install package using below command in project root terminal 

    composer require weboccult/tryon

Step 3 : Publish assets for ammaza plugin by running below command

    php artisan vendor:publish --tag=public --force

Step 4 : Add client id in your project .env file (You can get client id by filling up the form on this link https://www.ammazza.me/get-free-tryon/)

    AMMAZZA_CLINET_ID=YourClientId

Don't forget to run clear cache after changes in env file 

    php artisan cache:clear
    php artisan config:clear
    php artisan o:c


Step 5: Now add ammaza script and style to your view/blade file where you want to add tryon button 

    <link rel="stylesheet" href="{{ asset('css/ammaza-tryon-style.css') }} "/>
    <script src="{{ asset('js/ammaza-tryon-scripts.js') }} "></script>

Step 6: Add try on button using below code in view or controller 

	
    {!! app('trynow')::getTryOn()!!}

	
By default it will load all the products for the client id. If you want to show custom products pass product id as below 
	
	{!! app('trynow')::getTryOn("YourProductId")!!}

