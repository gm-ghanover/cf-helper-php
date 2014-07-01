<?php
/**
 * Created by IntelliJ IDEA.
 * User: xpbp8114
 * Date: 24/06/2014
 * Time: 18:50
 */

namespace orange\cfhelper\application;

use orange\cfhelper\services\PopulatorCloudFoundry;

class ApplicationInfo
{
    public $version;
    public $name;
    public $uris;
    public $host;
    public $port;

    public function __construct()
    {

    }


    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     * @param mixed $uri
     */
    public function setUris($uris)
    {
        $this->uris = $uris;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

} 