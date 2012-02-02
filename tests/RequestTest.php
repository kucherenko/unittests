<?php
/**
 * TestCase for testing work with request.
 *
 * @TODOLIST
 *
 * + Make object with information about request
 * + Can make object with custom request source
 * + Get parameter from request
 * + Take null if parameter is not exists
 *
 */

require_once '../src/Request.php';

/**
 * @author Andrey Kucherenko <andrey@kucherenko.org>
 * @date 01.02.12
 */
class RequestTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test for request object creation
     *
     * @covers Request::__construct
     */
    public function testNewRequest()
    {
        $fakeRequest = array('name' => 'parameter');
        $request = new Request($fakeRequest);
        $this->assertAttributeEquals($fakeRequest, '_source', $request);
    }

    /**
     * Test request object creation without source
     *
     * @covers Request::__construct
     */
    public function testNewRequestWithoutSource()
    {
        $request = new Request();
        $this->assertAttributeEquals($_REQUEST, '_source', $request);
    }

    /**
     * Test for getting parameter from request.
     *
     * @covers Request::get
     */
    public function testGetParameter()
    {
        $request = new Request(array('name' => 'parameter'));

        $this->assertEquals('parameter', $request->get('name'));
    }

    /**
     * Test for getting not existing parameter from request
     */
    public function testNotExistingParameter()
    {
        $request = new Request(array());
        $this->assertNull($request->get('name'));
    }

}
