<?php
/**
 *
 * @author Andrey Kucherenko <andrey@kucherenko.org>
 * @date 01.02.12
 *
 */
class Request
{
    /**
     * Array or request data
     * @var array
     */
    private $_source = null;

    /**
     * Class constructor
     * @param array $source
     */
    public function __construct($source = null) {
        if (is_null($source)){
            $source = $_REQUEST;
        }
        $this->_source = $source;
    }

    /**
     * Get parameter from request
     *
     * @param  string $name
     * @return mixed
     */
    public function get($name) {
        //return isset($this->_source[$name]) ? $this->_source[$name] : null;
        if (isset($this->_source[$name])) {
            return $this->_source[$name];
        } else {
            return null;
        }
    }
}
