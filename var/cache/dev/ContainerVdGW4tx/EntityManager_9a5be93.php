<?php

namespace ContainerVdGW4tx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderceb4b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerab0c8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese504f = [
        
    ];

    public function getConnection()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getConnection', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getMetadataFactory', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getExpressionBuilder', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'beginTransaction', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getCache', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'transactional', array('func' => $func), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'commit', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->commit();
    }

    public function rollback()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'rollback', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getClassMetadata', array('className' => $className), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'createQuery', array('dql' => $dql), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'createNamedQuery', array('name' => $name), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'createQueryBuilder', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'flush', array('entity' => $entity), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'clear', array('entityName' => $entityName), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->clear($entityName);
    }

    public function close()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'close', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->close();
    }

    public function persist($entity)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'persist', array('entity' => $entity), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'remove', array('entity' => $entity), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'refresh', array('entity' => $entity), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'detach', array('entity' => $entity), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'merge', array('entity' => $entity), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'contains', array('entity' => $entity), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getEventManager', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getConfiguration', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'isOpen', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getUnitOfWork', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getProxyFactory', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'initializeObject', array('obj' => $obj), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'getFilters', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'isFiltersStateClean', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'hasFilters', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return $this->valueHolderceb4b->hasFilters();
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

        $instance->initializerab0c8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderceb4b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderceb4b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderceb4b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, '__get', ['name' => $name], $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        if (isset(self::$publicPropertiese504f[$name])) {
            return $this->valueHolderceb4b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderceb4b;

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

        $targetObject = $this->valueHolderceb4b;
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
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderceb4b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderceb4b;
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
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, '__isset', array('name' => $name), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderceb4b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderceb4b;
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
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, '__unset', array('name' => $name), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderceb4b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderceb4b;
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
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, '__clone', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        $this->valueHolderceb4b = clone $this->valueHolderceb4b;
    }

    public function __sleep()
    {
        $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, '__sleep', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;

        return array('valueHolderceb4b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerab0c8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerab0c8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerab0c8 && ($this->initializerab0c8->__invoke($valueHolderceb4b, $this, 'initializeProxy', array(), $this->initializerab0c8) || 1) && $this->valueHolderceb4b = $valueHolderceb4b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderceb4b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderceb4b;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
