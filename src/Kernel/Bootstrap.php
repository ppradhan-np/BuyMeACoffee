<?php 
namespace BuyMeACoffeeClone\Kernel;

use Symfony\Component\Dotenv\Dotenv;


class Bootstrap 
{
    public function __construct()
    {
        $dotent = new Dotenv();
        $this->loadEnvironmentVariables($dotent);
        echo $_ENV['SITE_NAME'];
        echo "</br>";
        echo $_ENV['ADMIN_EMAIL'];

    }

    private function initialize()
    {

    }

    private function loadEnvironmentVariables(Dotenv $dotenv): void
    {
        $dotenv->load(__DIR__ .'/.env');
    }

}




