<?php
namespace Application\Controller\Factories;

use Zend\Authentication\AuthenticationService;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Session\SessionManager;
use Zend\Authentication\Storage\Session as SessionStorage;
use Interop\Container\ContainerInterface;
use Application\Controller\ListeSeriesController;

/**
 * The factory responsible for creating of authentication service.
 */
class ListeSeriesControllerFactory implements FactoryInterface
{
    /**
     * This method creates the Zend\Authentication\AuthenticationService service
     * and returns its instance.
     */
    public function __invoke(ContainerInterface $container,
                             $requestedName, array $options = null)
    {
        return new ListeSeriesController();
    }
}
