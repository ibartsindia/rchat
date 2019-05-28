<?php
    
    namespace kumarrahul\rchat;
    
    use Illuminate\Support\ServiceProvider;
    
    class ChatServiceProvider extends ServiceProvider {
        
        public function boot()
        {
            //Loading Routes
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            //Loading Viewes
            $this->loadViewsFrom(__DIR__.'/resources/views', 'rchat');
            
            //publishing
            $this->publishes([
                __DIR__.'/resources/views' => resource_path('views/vendor/rchat'),
                __DIR__.'/assets' => public_path('vendor/rchat'),
            ]);
        }
        
        public function register()
        {
        }
        
    }
?>