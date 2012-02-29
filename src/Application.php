<?php
/**
 *
 * @author Andrey Kucherenko <andrey@kucherenko.org>
 * @date 29.02.12
 *
 */
require_once 'Request.php';

class Application
{
    /**
     * @var Request
     */
    private $_request = null;


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
}
