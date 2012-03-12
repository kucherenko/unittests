<?php
/**
 *
 * @author Andrey Kucherenko <andrey@kucherenko.org>
 * @date 29.02.12
 *
 */
require_once 'Request.php';
require_once 'Response.php';

class Application
{
    /**
     * @var Request
     */
    private $_request = null;

    /**
     * @var Response
     */
    private $_response = null;

    /**
     * @var array<ControllerInterface>
     */
    private $_controllers = array();

    /**
     * @var ControllerInterface
     */
    private $_defaultController = null;

    /**
     * @var ControllerInterface
     */
    private $_errorController = null;

    /**
     * Method for making request object.
     *
     * @return null|Request
     */
    public function makeRequest()
    {
        $this->_request = new Request();
        return $this->_request;
    }

    /**
     * Method for making request object.
     *
     * @return null|Request
     */
    public function makeResponse()
    {
        $this->_response = new Response();
        return $this->_response;
    }

    /**
     * Bind controller to action in Application
     * @param $actionName
     * @param ControllerInterface $controller
     */
    public function bind($actionName, ControllerInterface $controller)
    {
        $this->_controllers[$actionName] = $controller;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->_request;
    }

    /**
     * @param Request $request
     */
    public function setRequest(Request $request)
    {
        $this->_request = $request;
    }

    /**
     * @param \ControllerInterface $defaultController
     */
    public function setDefaultController(ControllerInterface $defaultController)
    {
        $this->_defaultController = $defaultController;
    }

    /**
     * @return \ControllerInterface
     */
    public function getDefaultController()
    {
        return $this->_defaultController;
    }

    /**
     * @param ControllerInterface $errorController
     */
    public function setErrorController(ControllerInterface $errorController)
    {
        $this->_errorController = $errorController;
    }

    /**
     * @return ControllerInterface
     */
    public function getErrorController()
    {
        return $this->_errorController;
    }

    public function run($action)
    {
        $request = $this->makeRequest();
        $response = $this->makeResponse();
        $this->_controllers[$action]->proccess($request, $response);
    }
}
