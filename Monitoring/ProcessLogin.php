<?php
include './protected/Connection.php';

$user = filter_input(INPUT_POST, 'txtName');
$passwd = filter_input(INPUT_POST, 'txtPassword');
$server = filter_input(INPUT_POST, 'txtServer');
$env = filter_input(INPUT_POST, 'txtEnv');

//$final_env = shell_exec('cd $NM_HOME');

if(isset($user) && trim($user))
{
    if(isset($passwd) && trim($passwd))
    {
        
        $connection = new Connection($server, $env, $user, $passwd);
        $connection->SSHConnect($env);
        
        if (isset($connection))
        {
            session_start();
            $_SESSION['login'] = $connection->getUser();
            $_SESSION['server'] = $connection->getHost();
            $_SESSION['env'] = $connection->getEnv();
            $_SESSION['locale'] = $connection->getLocale();
            
            //serialize connection
            $_SESSION['connection'] = serialize($connection);
            
            //go to index
            header("location: index.php");
            
        }
        else
        {
            header("location: login.php");
        }
    }
    
    else 
    {
        echo "Access Denied!";
        header("location: login.php");
    }
}
 else {
     header("location: login.php");
}