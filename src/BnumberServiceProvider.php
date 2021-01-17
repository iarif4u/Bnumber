<?php


namespace iarif4u\bnumbeer;

use Illuminate\Support\ServiceProvider;

class BnumberServiceProvider extends ServiceProvider
{
    public function boot(){

    }

    public function register()
    {
        $this->app->bind('Bnumber',function(){
            return new Bnumber();
        });
        $file = __DIR__ . '/helper.php';
        if (file_exists($file)) {
            require_once($file);
        }
    }
}
