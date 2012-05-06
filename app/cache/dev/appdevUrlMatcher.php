<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\HelloBundle\\Controller\\HelloController::indexAction',  '_route' => '_welcome',);
        }

        // _assetic_b2db76b
        if ($pathinfo === '/css/b2db76b.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2db76b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b2db76b',);
        }

        // _assetic_b2db76b_0
        if ($pathinfo === '/css/b2db76b_part_1_style_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2db76b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b2db76b_0',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // hello
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hello');
            }
            return array (  '_controller' => 'Acme\\HelloBundle\\Controller\\HelloController::indexAction',  '_route' => 'hello',);
        }

        // posts
        if ($pathinfo === '/show_posts') {
            return array (  '_controller' => 'Acme\\HelloBundle\\Controller\\HelloController::showAction',  '_route' => 'posts',);
        }

        if (0 === strpos($pathinfo, '/subscribers')) {
            // subscribers
            if (rtrim($pathinfo, '/') === '/subscribers') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'subscribers');
                }
                return array (  '_controller' => 'Acme\\HelloBundle\\Controller\\SubscribersController::indexAction',  '_route' => 'subscribers',);
            }

            // subscribers_show
            if (preg_match('#^/subscribers/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\HelloBundle\\Controller\\SubscribersController::showAction',)), array('_route' => 'subscribers_show'));
            }

            // subscribers_new
            if ($pathinfo === '/subscribers/new') {
                return array (  '_controller' => 'Acme\\HelloBundle\\Controller\\SubscribersController::newAction',  '_route' => 'subscribers_new',);
            }

            // subscribers_create
            if ($pathinfo === '/subscribers/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_subscribers_create;
                }
                return array (  '_controller' => 'Acme\\HelloBundle\\Controller\\SubscribersController::createAction',  '_route' => 'subscribers_create',);
            }
            not_subscribers_create:

            // subscribers_edit
            if (preg_match('#^/subscribers/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\HelloBundle\\Controller\\SubscribersController::editAction',)), array('_route' => 'subscribers_edit'));
            }

            // subscribers_update
            if (preg_match('#^/subscribers/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_subscribers_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\HelloBundle\\Controller\\SubscribersController::updateAction',)), array('_route' => 'subscribers_update'));
            }
            not_subscribers_update:

            // homepage
            if ($pathinfo === '/subscribers/..') {
                return array (  '_controller' => 'Acme\\HelloBundle\\Controller\\HelloController::indexAction',  '_route' => 'homepage',);
            }

            // subscribers_delete
            if (preg_match('#^/subscribers/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_subscribers_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\HelloBundle\\Controller\\SubscribersController::deleteAction',)), array('_route' => 'subscribers_delete'));
            }
            not_subscribers_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
