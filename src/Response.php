<?php
/**
 * File contains response class
 * @author Andrey Kucherenko <andrey@kucherenko.org>
 * @date 07.02.12
 *
 */
class Response
{
    /**
     * Response body
     * @var string
     */
    private $_body;

    /**
     * Array of response headers
     * @var array
     */
    private $_headers = array();

    /**
     * Set response body
     * @param string $body
     */
    public function setBody($body)
    {
        $this->_body = $body;
    }

    public function addHeader($header)
    {
        $this->_headers[] = $header;
    }

    public function sendHeaders()
    {
        foreach ($this->_headers as $header) {
            header($header);
        }
    }

    public function __toString()
    {
        $this->sendHeaders();
        return $this->_body;
    }
}
