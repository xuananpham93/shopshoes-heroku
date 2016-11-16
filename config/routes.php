<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Homes', 'action' => 'index', 'home']);
    $routes->connect('/*', ['controller' => 'Products', 'action' => 'index']);
    $routes->connect('/danh-muc/*', ['controller' => 'Catproducts', 'action' => 'view']);
    $routes->connect('/gioi-thieu/*', ['controller' => 'Homes', 'action' => 'intro']);
    $routes->connect('/tim-kiem/*', ['controller' => 'Products', 'action' => 'search']);
    $routes->connect('/gio-hang/*', ['controller' => 'Products', 'action' => 'viewCart']);
    $routes->connect('/detail-cart', ['controller' => 'Products', 'action' => 'detailCart']);
    $routes->connect('/empty-cart', ['controller' => 'Products', 'action' => 'emptyCart']);
    $routes->connect('/remove/*', ['controller' => 'Products', 'action' => 'remove']);
    $routes->connect('/update/*', ['controller' => 'Products', 'action' => 'updateCart']);
    $routes->connect('/them-gio-hang/*', ['controller' => 'Products', 'action' => 'addToCart']);
    $routes->connect('/thong-tin/*', ['controller' => 'Catalogues', 'action' => 'index']);
    $routes->connect('/chi-tiet/*', ['controller' => 'News', 'action' => 'index']);
    $routes->connect('/lien-he', ['controller' => 'Contacts', 'action' => 'index']);
    $routes->connect('/thanh-toan', ['controller' => 'Orders', 'action' => 'index']);
    $routes->connect('/lich-su-mua-hang', ['controller' => 'Orders', 'action' => 'history']);
    $routes->connect('/dang-ky-email', ['controller' => 'Registers', 'action' => 'dangky']);
    $routes->connect('/register', ['controller' => 'Administrators', 'action' => 'add']);
    $routes->connect('/log-in', ['controller' => 'Administrators', 'action' => 'login']);
    $routes->connect('/log-out', ['controller' => 'Administrators', 'action' => 'logout']);
    $routes->connect('/change-info', ['controller' => 'Administrators', 'action' => 'changeInfo']);
    $routes->connect('/change-password', ['controller' => 'Administrators', 'action' => 'changePassword']);
    $routes->connect('/purchase-history', ['controller' => 'Administrators', 'action' => 'history']);
    $routes->connect('/select/*', ['controller' => 'Homes', 'action' => 'select']);
    $routes->connect('/so-sanh', ['controller' => 'Products', 'action' => 'compare']);
    $routes->connect('/rating', ['controller' => 'Posts', 'action' => 'view']);
    $routes->connect('/lien-he', ['controller' => 'Contacts', 'action' => 'index']);
    $routes->connect('/don-hang/*', ['controller' => 'Orders', 'action' => 'detail']);
    $routes->connect('/search-angular', ['controller' => 'Catproducts', 'action' => 'search']);
    
    
    
    //Router::connect('/:book_title',array('controller'=>'books','action'=>'view'),array('pass'=>array('book_title')));

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks('DashedRoute');
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
