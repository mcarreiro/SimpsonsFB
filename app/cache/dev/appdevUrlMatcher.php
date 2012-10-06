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

        // _assetic_c5f84b3
        if ($pathinfo === '/js/c5f84b3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5f84b3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c5f84b3',);
        }

        // _assetic_c5f84b3_0
        if ($pathinfo === '/js/c5f84b3_main_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5f84b3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c5f84b3_0',);
        }

        // _assetic_c5f84b3_1
        if ($pathinfo === '/js/c5f84b3_jquery-1.7.1.min_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5f84b3',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_c5f84b3_1',);
        }

        // _assetic_c5f84b3_2
        if ($pathinfo === '/js/c5f84b3_jquery-ui-1.8.21.custom.min_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c5f84b3',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_c5f84b3_2',);
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

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }
            return array (  '_controller' => 'sfb\\sfbBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // frases_search
        if ($pathinfo === '/frase/search') {
            return array (  '_controller' => 'sfb\\sfbBundle\\Controller\\DefaultController::searchAction',  '_format' => 'json',  '_route' => 'frases_search',);
        }

        // frase_create
        if ($pathinfo === '/frase/agregar') {
            return array (  '_controller' => 'sfb\\sfbBundle\\Controller\\FrasesController::createAction',  '_route' => 'frase_create',);
        }

        // frase_new
        if ($pathinfo === '/frase/nuevo') {
            return array (  '_controller' => 'sfb\\sfbBundle\\Controller\\FrasesController::newAction',  '_route' => 'frase_new',);
        }

        // getEpisodes
        if (rtrim($pathinfo, '/') === '/episodes') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'getEpisodes');
            }
            return array (  '_controller' => 'sfb\\sfbBundle\\Controller\\DefaultController::getEpisodesAction',  '_format' => 'json',  '_route' => 'getEpisodes',);
        }

        // frases_show
        if (0 === strpos($pathinfo, '/frase/show') && preg_match('#^/frase/show/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'sfb\\sfbBundle\\Controller\\FrasesController::showAction',)), array('_route' => 'frases_show'));
        }

        // enviarSugerencia
        if ($pathinfo === '/sugerencia') {
            return array (  '_controller' => 'sfb\\sfbBundle\\Controller\\DefaultController::enviarSugerenciaAction',  '_route' => 'enviarSugerencia',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
