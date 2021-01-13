<?php namespace Sehan\Playground;

use Backend;
use System\Classes\PluginBase;

/**
 * Playground Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Playground',
            'description' => 'No description provided yet...',
            'author'      => 'Sehan',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Sehan\Playground\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'sehan.playground.some_permission' => [
                'tab' => 'Playground',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'playground' => [
                'label'       => 'Playground',
                'url'         => Backend::url('sehan/playground/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['sehan.playground.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerSchedule($schedule)
    {
        
    }
}
