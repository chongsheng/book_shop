<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_manage_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_manage_homepage');
                }

                return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_manage_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/goods')) {
                // admin_goods
                if (rtrim($pathinfo, '/') === '/admin/goods') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_goods');
                    }

                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\GoodsController::indexAction',  '_route' => 'admin_goods',);
                }

                // admin_goods_show
                if (preg_match('#^/admin/goods/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_goods_show')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\GoodsController::showAction',));
                }

                // admin_goods_new
                if ($pathinfo === '/admin/goods/new') {
                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\GoodsController::newAction',  '_route' => 'admin_goods_new',);
                }

                // admin_goods_create
                if ($pathinfo === '/admin/goods/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_goods_create;
                    }

                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\GoodsController::createAction',  '_route' => 'admin_goods_create',);
                }
                not_admin_goods_create:

                // admin_goods_edit
                if (preg_match('#^/admin/goods/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_goods_edit')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\GoodsController::editAction',));
                }

                // admin_goods_update
                if (preg_match('#^/admin/goods/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_goods_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_goods_update')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\GoodsController::updateAction',));
                }
                not_admin_goods_update:

                // admin_goods_delete
                if (preg_match('#^/admin/goods/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_goods_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_goods_delete')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\GoodsController::deleteAction',));
                }
                not_admin_goods_delete:

            }

            if (0 === strpos($pathinfo, '/admin/msg')) {
                // admin_msg
                if (rtrim($pathinfo, '/') === '/admin/msg') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_msg');
                    }

                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\MsgController::indexAction',  '_route' => 'admin_msg',);
                }

                // admin_msg_show
                if (preg_match('#^/admin/msg/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_msg_show')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\MsgController::showAction',));
                }

                // admin_msg_new
                if ($pathinfo === '/admin/msg/new') {
                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\MsgController::newAction',  '_route' => 'admin_msg_new',);
                }

                // admin_msg_create
                if ($pathinfo === '/admin/msg/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_msg_create;
                    }

                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\MsgController::createAction',  '_route' => 'admin_msg_create',);
                }
                not_admin_msg_create:

                // admin_msg_edit
                if (preg_match('#^/admin/msg/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_msg_edit')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\MsgController::editAction',));
                }

                // admin_msg_update
                if (preg_match('#^/admin/msg/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_msg_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_msg_update')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\MsgController::updateAction',));
                }
                not_admin_msg_update:

                // admin_msg_delete
                if (preg_match('#^/admin/msg/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_msg_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_msg_delete')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\MsgController::deleteAction',));
                }
                not_admin_msg_delete:

            }

            if (0 === strpos($pathinfo, '/admin/orders')) {
                // admin_orders
                if (rtrim($pathinfo, '/') === '/admin/orders') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_orders');
                    }

                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\OrdersController::indexAction',  '_route' => 'admin_orders',);
                }

                // admin_orders_show
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orders_show')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\OrdersController::showAction',));
                }

                // admin_orders_new
                if ($pathinfo === '/admin/orders/new') {
                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\OrdersController::newAction',  '_route' => 'admin_orders_new',);
                }

                // admin_orders_create
                if ($pathinfo === '/admin/orders/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_orders_create;
                    }

                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\OrdersController::createAction',  '_route' => 'admin_orders_create',);
                }
                not_admin_orders_create:

                // admin_orders_edit
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orders_edit')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\OrdersController::editAction',));
                }

                // admin_orders_update
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_orders_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orders_update')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\OrdersController::updateAction',));
                }
                not_admin_orders_update:

                // admin_orders_delete
                if (preg_match('#^/admin/orders/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_orders_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orders_delete')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\OrdersController::deleteAction',));
                }
                not_admin_orders_delete:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_user');
                    }

                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
                }

                // admin_user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\UserController::showAction',));
                }

                // admin_user_new
                if ($pathinfo === '/admin/user/new') {
                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
                }

                // admin_user_create
                if ($pathinfo === '/admin/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_create;
                    }

                    return array (  '_controller' => 'Admin\\ManageBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
                }
                not_admin_user_create:

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\UserController::editAction',));
                }

                // admin_user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\UserController::updateAction',));
                }
                not_admin_user_update:

                // admin_user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'Admin\\ManageBundle\\Controller\\UserController::deleteAction',));
                }
                not_admin_user_delete:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // ibw_jobeet_homepage
        if (preg_match('#^/(?P<_locale>en|fr|zh)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_jobeet_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_jobeet_homepage')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_login;
                    }

                    return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }
                not_login:

                // login_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_login_check;
                    }

                    return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\DefaultController::login_checkAction',  '_route' => 'login_check',);
                }
                not_login_check:

            }

            // logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_logout;
                }

                return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
            }
            not_logout:

        }

        // IbwJobeetBundle_changeLanguage
        if ($pathinfo === '/change_language') {
            return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\DefaultController::changeLanguageAction',  '_route' => 'IbwJobeetBundle_changeLanguage',);
        }

        // ibw_user
        if (preg_match('#^/(?P<_locale>[^/]++)/user/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_user');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_user')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\UserController::indexAction',));
        }

        // ibw_user_show
        if (preg_match('#^/(?P<_locale>[^/]++)/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_user_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\UserController::showAction',));
        }

        // ibw_user_new
        if (preg_match('#^/(?P<_locale>[^/]++)/user/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_user_new')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\UserController::newAction',));
        }

        // ibw_user_create
        if (preg_match('#^/(?P<_locale>[^/]++)/user/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ibw_user_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_user_create')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\UserController::createAction',));
        }
        not_ibw_user_create:

        // ibw_user_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_user_edit')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\UserController::editAction',));
        }

        // ibw_user_update
        if (preg_match('#^/(?P<_locale>[^/]++)/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_ibw_user_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_user_update')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\UserController::updateAction',));
        }
        not_ibw_user_update:

        // ibw_user_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_ibw_user_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_user_delete')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\UserController::deleteAction',));
        }
        not_ibw_user_delete:

        // ibw_msg
        if (preg_match('#^/(?P<_locale>[^/]++)/msg/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_msg');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_msg')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\MsgController::indexAction',));
        }

        // ibw_msg_show
        if (preg_match('#^/(?P<_locale>[^/]++)/msg/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_msg_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\MsgController::showAction',));
        }

        // ibw_msg_new
        if (preg_match('#^/(?P<_locale>[^/]++)/msg/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_msg_new')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\MsgController::newAction',));
        }

        // ibw_msg_create
        if (preg_match('#^/(?P<_locale>[^/]++)/msg/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ibw_msg_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_msg_create')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\MsgController::createAction',));
        }
        not_ibw_msg_create:

        // ibw_msg_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/msg/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_msg_edit')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\MsgController::editAction',));
        }

        // ibw_msg_update
        if (preg_match('#^/(?P<_locale>[^/]++)/msg/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_ibw_msg_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_msg_update')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\MsgController::updateAction',));
        }
        not_ibw_msg_update:

        // ibw_msg_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/msg/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_ibw_msg_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_msg_delete')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\MsgController::deleteAction',));
        }
        not_ibw_msg_delete:

        // ibw_goods
        if (preg_match('#^/(?P<_locale>[^/]++)/goods/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_goods');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_goods')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\GoodsController::indexAction',));
        }

        // ibw_goods_show
        if (preg_match('#^/(?P<_locale>[^/]++)/goods/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_goods_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\GoodsController::showAction',));
        }

        // ibw_orders
        if (preg_match('#^/(?P<_locale>[^/]++)/orders/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_orders');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_orders')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\OrdersController::indexAction',));
        }

        // ibw_orders_show
        if (preg_match('#^/(?P<_locale>[^/]++)/orders/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_orders_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\OrdersController::showAction',));
        }

        // ibw_orders_new
        if (preg_match('#^/(?P<_locale>[^/]++)/orders/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_orders_new')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\OrdersController::newAction',));
        }

        // ibw_orders_create
        if (preg_match('#^/(?P<_locale>[^/]++)/orders/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ibw_orders_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_orders_create')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\OrdersController::createAction',));
        }
        not_ibw_orders_create:

        // ibw_orders_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/orders/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_orders_edit')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\OrdersController::editAction',));
        }

        // ibw_orders_update
        if (preg_match('#^/(?P<_locale>[^/]++)/orders/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_ibw_orders_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_orders_update')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\OrdersController::updateAction',));
        }
        not_ibw_orders_update:

        // ibw_orders_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/orders/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_ibw_orders_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_orders_delete')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\OrdersController::deleteAction',));
        }
        not_ibw_orders_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
