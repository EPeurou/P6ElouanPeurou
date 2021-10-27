<?php

namespace ContainerNpwwme9;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3bd42 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer69d5a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd13f9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getConnection', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getMetadataFactory', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getExpressionBuilder', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'beginTransaction', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getCache', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getCache();
    }

    public function transactional($func)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'transactional', array('func' => $func), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'wrapInTransaction', array('func' => $func), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'commit', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->commit();
    }

    public function rollback()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'rollback', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getClassMetadata', array('className' => $className), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'createQuery', array('dql' => $dql), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'createNamedQuery', array('name' => $name), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'createQueryBuilder', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'flush', array('entity' => $entity), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'clear', array('entityName' => $entityName), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->clear($entityName);
    }

    public function close()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'close', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->close();
    }

    public function persist($entity)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'persist', array('entity' => $entity), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'remove', array('entity' => $entity), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'refresh', array('entity' => $entity), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'detach', array('entity' => $entity), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'merge', array('entity' => $entity), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getRepository', array('entityName' => $entityName), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'contains', array('entity' => $entity), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getEventManager', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getConfiguration', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'isOpen', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getUnitOfWork', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getProxyFactory', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'initializeObject', array('obj' => $obj), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'getFilters', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'isFiltersStateClean', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'hasFilters', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return $this->valueHolder3bd42->hasFilters();
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

        $instance->initializer69d5a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3bd42) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3bd42 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3bd42->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, '__get', ['name' => $name], $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        if (isset(self::$publicPropertiesd13f9[$name])) {
            return $this->valueHolder3bd42->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bd42;

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

        $targetObject = $this->valueHolder3bd42;
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
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bd42;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3bd42;
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
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, '__isset', array('name' => $name), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bd42;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3bd42;
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
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, '__unset', array('name' => $name), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3bd42;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3bd42;
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
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, '__clone', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        $this->valueHolder3bd42 = clone $this->valueHolder3bd42;
    }

    public function __sleep()
    {
        $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, '__sleep', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;

        return array('valueHolder3bd42');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69d5a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69d5a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer69d5a && ($this->initializer69d5a->__invoke($valueHolder3bd42, $this, 'initializeProxy', array(), $this->initializer69d5a) || 1) && $this->valueHolder3bd42 = $valueHolder3bd42;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3bd42;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3bd42;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
