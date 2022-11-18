<?php

namespace ContainerFooQmLS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder21322 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2eddd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb93c4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getConnection', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getMetadataFactory', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getExpressionBuilder', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'beginTransaction', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getCache', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'transactional', array('func' => $func), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'commit', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->commit();
    }

    public function rollback()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'rollback', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getClassMetadata', array('className' => $className), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'createQuery', array('dql' => $dql), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'createNamedQuery', array('name' => $name), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'createQueryBuilder', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'flush', array('entity' => $entity), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'clear', array('entityName' => $entityName), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->clear($entityName);
    }

    public function close()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'close', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->close();
    }

    public function persist($entity)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'persist', array('entity' => $entity), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'remove', array('entity' => $entity), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'refresh', array('entity' => $entity), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'detach', array('entity' => $entity), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'merge', array('entity' => $entity), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'contains', array('entity' => $entity), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getEventManager', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getConfiguration', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'isOpen', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getUnitOfWork', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getProxyFactory', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'initializeObject', array('obj' => $obj), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'getFilters', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'isFiltersStateClean', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'hasFilters', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return $this->valueHolder21322->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2eddd = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder21322) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder21322 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder21322->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, '__get', ['name' => $name], $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        if (isset(self::$publicPropertiesb93c4[$name])) {
            return $this->valueHolder21322->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21322;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder21322;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21322;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder21322;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, '__isset', array('name' => $name), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21322;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder21322;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, '__unset', array('name' => $name), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21322;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder21322;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, '__clone', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        $this->valueHolder21322 = clone $this->valueHolder21322;
    }

    public function __sleep()
    {
        $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, '__sleep', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;

        return array('valueHolder21322');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2eddd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2eddd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2eddd && ($this->initializer2eddd->__invoke($valueHolder21322, $this, 'initializeProxy', array(), $this->initializer2eddd) || 1) && $this->valueHolder21322 = $valueHolder21322;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder21322;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder21322;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
