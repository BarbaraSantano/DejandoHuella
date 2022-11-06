<?php

namespace ContainerDL7OyqG;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere3a7e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer24e79 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7291c = [
        
    ];

    public function getConnection()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getConnection', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getMetadataFactory', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getExpressionBuilder', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'beginTransaction', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getCache', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'transactional', array('func' => $func), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'commit', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->commit();
    }

    public function rollback()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'rollback', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getClassMetadata', array('className' => $className), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'createQuery', array('dql' => $dql), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'createNamedQuery', array('name' => $name), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'createQueryBuilder', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'flush', array('entity' => $entity), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'clear', array('entityName' => $entityName), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->clear($entityName);
    }

    public function close()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'close', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->close();
    }

    public function persist($entity)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'persist', array('entity' => $entity), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'remove', array('entity' => $entity), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'refresh', array('entity' => $entity), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'detach', array('entity' => $entity), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'merge', array('entity' => $entity), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'contains', array('entity' => $entity), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getEventManager', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getConfiguration', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'isOpen', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getUnitOfWork', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getProxyFactory', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'initializeObject', array('obj' => $obj), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'getFilters', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'isFiltersStateClean', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'hasFilters', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return $this->valueHoldere3a7e->hasFilters();
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

        $instance->initializer24e79 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere3a7e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere3a7e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere3a7e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, '__get', ['name' => $name], $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        if (isset(self::$publicProperties7291c[$name])) {
            return $this->valueHoldere3a7e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3a7e;

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

        $targetObject = $this->valueHoldere3a7e;
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
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3a7e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere3a7e;
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
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, '__isset', array('name' => $name), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3a7e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere3a7e;
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
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, '__unset', array('name' => $name), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3a7e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere3a7e;
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
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, '__clone', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        $this->valueHoldere3a7e = clone $this->valueHoldere3a7e;
    }

    public function __sleep()
    {
        $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, '__sleep', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;

        return array('valueHoldere3a7e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer24e79 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer24e79;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer24e79 && ($this->initializer24e79->__invoke($valueHoldere3a7e, $this, 'initializeProxy', array(), $this->initializer24e79) || 1) && $this->valueHoldere3a7e = $valueHoldere3a7e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere3a7e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere3a7e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
