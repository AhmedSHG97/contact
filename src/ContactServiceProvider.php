<?php
namespace Laravel\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'ahmedlaravel/contactpkg');
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views'),
        ]);
    }


    public function register(){

    }
    

}