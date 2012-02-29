<?php
/**
 * @TODOLIST
 *
 * - Make request object
 * - Run action in controller
 * - Make response object
 * - can run default action
 * - run errors controllers
 *
 * @author Andrey Kucherenko <andrey@kucherenko.org>
 * @date 06.02.12
 */
require_once '../src/Application.php';

class ApplicationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Application
     */
    public $_sut;

    public function setUp()
    {
        $this->_sut = new Application();
    }

    /**
     * Test for make request
     */
    public function testMakeRequest()
    {
        $request = $this->_sut->makeRequest();
        $this->assertTrue($request instanceof Request);
    }

    public function testRunAction()
    {

    }

    public function testMakeResponseObject()
    {

    }

    public function testRunDefaultAction()
    {

    }

    public function testRunErrorController()
    {

    }
}
