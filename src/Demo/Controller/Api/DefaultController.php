<?php
namespace Demo\Controller\Api;

use Silex\Application;
use Silex\ControllerProviderInterface;

/**
 * DefaultController
 * 
 * @author Tran Minh Quang <z.quangtran@gmail.com>
 */
class DefaultController implements ControllerProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function connect(Application $app)
    {
        // creates a new controller based on the default route
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return $app->json(array('hello' => 'would'));
        })->bind('homepage_api');

        return $controllers;
    }
}

