<?php


/**
 * Description of Connection
 *
 * @author tiago.silva
 */


include 'Net/SSH2.php';

class Connection {
    
    /*
     * Connection vars
     * Used in login and
     * $_SESSION[];
     */
	
    private $host;
    private $user;
    private $passwd;
    private $env;
    private $locale;
    
 
    function __construct($host, $env, $user, $passwd) {
        $this->host = $host;
        $this->env  = $env;
        $this->user = $user;
        $this->passwd = $passwd;
    }

    public function getHost() {
        return $this->host;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPasswd() {
        return $this->passwd;
    }

    public function getEnv() {
        return $this->env;
    }
    
    public function getLocale() {
    	return $this->locale;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPasswd($passwd) {
        $this->passwd = $passwd;
    }

    public function setEnv($env) {
        $this->env = $env;
    }
    

    public function setLocale($locale) {
        $this->locale = $locale;
    }


        
    function SSHConnect($env)
    {

        //local variables
        $command = array("pwd", "cd", "/static/".$env."/", "ll");
        $local = NULL;

        //get host
        $ssh = new Net_SSH2($this->getHost());
        
        // if passwd and username are correct
        if(!$ssh->login($this->getUser(), $this->getPasswd())) 
        {
        	exit("Login Failed!");
        }
        
        else 
        {
	        if(isset($ssh))
	        {
				echo $ssh->exec($command[0]);
				$stream = $ssh->exec($command[0]);
				$this->setLocale($stream);
	        }
        }
    }
    
    function ExecCommand($env, $command)
    {
    	$ssh = new Net_SSH2($this->getHost());
    	$stream = $ssh->exec($command);
    	
    	return $stream;
    }
}
