<?php
use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\Common\Cache\ArrayCache,
    Doctrine\DBAL\Logging\EchoSQLLogger,
    Symfony\Component\Console;
use Doctrine\ORM\Tools\Setup;

/**
 * @property \Doctrine\ORM\EntityManager $em Gerenciador de Entidade
 */
class Doctrine
{

    public $em = '';

    public function __construct()
    {
        // Set up class loading. You could use different autoloaders, provided by your favorite framework,
        // if you want to.
        require_once BASEPATH . 'third_party/Doctrine/Common/ClassLoader.php';
        require_once BASEPATH . "third_party/Doctrine/ORM/Tools/Setup.php";

        Doctrine\ORM\Tools\Setup::registerAutoloadDirectory(BASEPATH . "third_party/");

        $doctrineClassLoader = new ClassLoader('Doctrine', BASEPATH . 'third_party/Doctrine');
        $doctrineClassLoader->register();
        $proxiesClassLoader  = new ClassLoader('Proxies', APPPATH . 'models/proxies');
        $proxiesClassLoader->register();

        // Set up caches
        $config     = new Configuration;
        $cache      = new ArrayCache;
        $config->setMetadataCacheImpl($cache);
        $driverImpl = $config->newDefaultAnnotationDriver(array(APPPATH . 'models/Entities'));
        $config->setMetadataDriverImpl($driverImpl);
        $config->setQueryCacheImpl($cache);

        $config->setQueryCacheImpl($cache);

        // Proxy configuration
        $config->setProxyDir(APPPATH . '/models/proxies');
        $config->setProxyNamespace('Proxies');

        // Set up logger
        #$logger = new EchoSQLLogger;
        #$config->setSQLLogger($logger);

        $config->setAutoGenerateProxyClasses(TRUE);

        require APPPATH . 'config/database.php';

        // Database connection information
        $connectionOptions = array(
            'driver'   => 'mysqli',
            'user'     => $db['default']['username'],
            'password' => $db['default']['password'],
            'host'     => $db['default']['hostname'],
            'dbname'   => $db['default']['database'],
            'charset'  => 'utf8',
            'driverOptions' => array(1002 => 'SET NAMES utf8')
        );


        // Enforce connection character set. This is very important if you are
        // using MySQL and InnoDB tables!
        //Doctrine_Manager::connection()->setCharset('utf8');
        //Doctrine_Manager::connection()->setCollate('utf8_general_ci');

        // Create EntityManager
        $this->em = EntityManager::create($connectionOptions, $config);
    }

}