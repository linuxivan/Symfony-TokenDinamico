<?php

namespace ContainerSL2VGra;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLlamadasControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LlamadasController' shared autowired service.
     *
     * @return \App\Controller\LlamadasController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LlamadasController.php';

        $container->services['App\\Controller\\LlamadasController'] = $instance = new \App\Controller\LlamadasController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'message_bus' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
            'messenger.default_bus' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', '.container.private.security.authorization_checker', 'get_Container_Private_Security_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', '.container.private.security.csrf.token_manager', 'get_Container_Private_Security_Csrf_TokenManagerService', true],
            'security.token_storage' => ['services', '.container.private.security.token_storage', 'get_Container_Private_Security_TokenStorageService', false],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'session' => ['privates', '.session.deprecated', 'get_Session_DeprecatedService', true],
            'twig' => ['services', '.container.private.twig', 'get_Container_Private_TwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'message_bus' => '?',
            'messenger.default_bus' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '.session.deprecated',
            'twig' => '?',
        ]))->withContext('App\\Controller\\LlamadasController', $container));

        return $instance;
    }
}