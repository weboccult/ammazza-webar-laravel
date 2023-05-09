<?php
 namespace Tryon; 
 use Illuminate\Support\ServiceProvider; 
 
 class TryonProvider extends ServiceProvider 
{ 
    public function boot() { 
        $this->publishes([
            __DIR__.'/assets/ammaza-tryon-scripts.js' => public_path('js/ammaza-tryon-scripts.js'),
        ], 'public');
        $this->publishes([
            __DIR__.'/assets/ammaza-tryon-style.css' => public_path('css/ammaza-tryon-style.css'),
        ], 'public'); 
    }
    public function register() {
         $this->app->bind('trynow', function () 
         { 
            return new Tryon(); 
        }); 
        
    } 
} 