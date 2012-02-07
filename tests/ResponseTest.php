<?php
/**
 * File contains test for response object
 *
 * @TODOLIST
 * - Add header to response
 * - Set body to response
 * - Send header
 * - Send body
 *
 * @author Andrey Kucherenko <andrey@kucherenko.org>
 * @date 03.02.12
 */
require_once '../src/Response.php';

class ResponseTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Response
     */
    private $_sut;

    public function setUp()
    {
        $this->_sut = new Response();
    }

    /**
     * Add body to response
     */
    public function testSetBody()
    {
        $this->_sut->setBody('test');
        $this->assertAttributeEquals('test', '_body', $this->_sut);
    }

    /**
     * Add header to response
     */
    public function testAddHeader()
    {
        $this->_sut->addHeader('Content-Type: text/html');
        $this->assertAttributeContains('Content-Type: text/html', '_headers', $this->_sut);
    }

    /**
     * Test for send headers in __toString method
     */
    public function testToString()
    {
        $response = $this->getMock('Response', array('sendHeaders'));

        $response->expects($this->once())
                 ->method('sendHeaders');

        $response->__toString();
    }

    /**
     * Test for send headers in __toString method
     */
    public function testToStringBody()
    {
        $this->_sut->setBody('test');

        $this->assertEquals('test', $this->_sut->__toString());
    }
}
