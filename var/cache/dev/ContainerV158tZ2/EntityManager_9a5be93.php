<?php

namespace ContainerV158tZ2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder62a56 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerda1d6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesda5e0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getConnection', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getMetadataFactory', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getExpressionBuilder', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'beginTransaction', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getCache', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getCache();
    }

    public function transactional($func)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'transactional', array('func' => $func), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'wrapInTransaction', array('func' => $func), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'commit', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->commit();
    }

    public function rollback()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'rollback', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getClassMetadata', array('className' => $className), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'createQuery', array('dql' => $dql), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'createNamedQuery', array('name' => $name), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'createQueryBuilder', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'flush', array('entity' => $entity), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'clear', array('entityName' => $entityName), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->clear($entityName);
    }

    public function close()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'close', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->close();
    }

    public function persist($entity)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'persist', array('entity' => $entity), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'remove', array('entity' => $entity), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'refresh', array('entity' => $entity), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'detach', array('entity' => $entity), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'merge', array('entity' => $entity), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getRepository', array('entityName' => $entityName), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'contains', array('entity' => $entity), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getEventManager', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getConfiguration', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'isOpen', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getUnitOfWork', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getProxyFactory', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'initializeObject', array('obj' => $obj), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'getFilters', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'isFiltersStateClean', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'hasFilters', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return $this->valueHolder62a56->hasFilters();
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

        $instance->initializerda1d6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder62a56) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder62a56 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder62a56->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, '__get', ['name' => $name], $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        if (isset(self::$publicPropertiesda5e0[$name])) {
            return $this->valueHolder62a56->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a56;

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

        $targetObject = $this->valueHolder62a56;
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
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a56;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder62a56;
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
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, '__isset', array('name' => $name), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a56;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder62a56;
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
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, '__unset', array('name' => $name), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a56;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder62a56;
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
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, '__clone', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        $this->valueHolder62a56 = clone $this->valueHolder62a56;
    }

    public function __sleep()
    {
        $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, '__sleep', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;

        return array('valueHolder62a56');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerda1d6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerda1d6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerda1d6 && ($this->initializerda1d6->__invoke($valueHolder62a56, $this, 'initializeProxy', array(), $this->initializerda1d6) || 1) && $this->valueHolder62a56 = $valueHolder62a56;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder62a56;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder62a56;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
