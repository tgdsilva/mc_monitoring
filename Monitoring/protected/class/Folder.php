<?php


/**
 * Description of Folder
 *
 * @author tiago.silva
 */
class Folder {
    
    private $user;
    private $server;
    private $env;
    
    function __construct($user, $server, $env) {
        $this->user = $user;
        $this->server = $server;
        $this->env = $env;
    }

    
    public function getUser() {
        return $this->user;
    }

    public function getServer() {
        return $this->server;
    }

    public function getEnv() {
        return $this->env;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setServer($server) {
        $this->server = $server;
    }

    public function setEnv($env) {
        $this->env = $env;
    }

    
    /*
     * Public functions for folder
     */
    
    function ListFolder($user, $serv, $env)
    {
        $user = $this->getUser();
        $serv = $this->getServer();
        $env = $this->getEnv();
        
        
        
        
    }

    
}
