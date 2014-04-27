<?php namespace Dec\Transformer;

use Illuminate\Support\ServiceProvider;

class TransformerServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
	    $this->package('dec/transformer');
	}


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('transformer', 'Dec\Transformer\Transformer');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
