<?php

namespace ContainerMgkbjKU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder524a5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer98f21 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese1f3f = [
        
    ];

    public function getConnection()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getConnection', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getMetadataFactory', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getExpressionBuilder', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'beginTransaction', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getCache', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'transactional', array('func' => $func), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'commit', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->commit();
    }

    public function rollback()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'rollback', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getClassMetadata', array('className' => $className), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'createQuery', array('dql' => $dql), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'createNamedQuery', array('name' => $name), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'createQueryBuilder', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'flush', array('entity' => $entity), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'clear', array('entityName' => $entityName), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->clear($entityName);
    }

    public function close()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'close', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->close();
    }

    public function persist($entity)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'persist', array('entity' => $entity), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'remove', array('entity' => $entity), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'refresh', array('entity' => $entity), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'detach', array('entity' => $entity), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'merge', array('entity' => $entity), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'contains', array('entity' => $entity), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getEventManager', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getConfiguration', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'isOpen', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getUnitOfWork', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getProxyFactory', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'initializeObject', array('obj' => $obj), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'getFilters', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'isFiltersStateClean', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'hasFilters', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return $this->valueHolder524a5->hasFilters();
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

        $instance->initializer98f21 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder524a5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder524a5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder524a5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, '__get', ['name' => $name], $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        if (isset(self::$publicPropertiese1f3f[$name])) {
            return $this->valueHolder524a5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder524a5;

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

        $targetObject = $this->valueHolder524a5;
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
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder524a5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder524a5;
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
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, '__isset', array('name' => $name), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder524a5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder524a5;
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
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, '__unset', array('name' => $name), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder524a5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder524a5;
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
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, '__clone', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        $this->valueHolder524a5 = clone $this->valueHolder524a5;
    }

    public function __sleep()
    {
        $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, '__sleep', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;

        return array('valueHolder524a5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer98f21 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer98f21;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer98f21 && ($this->initializer98f21->__invoke($valueHolder524a5, $this, 'initializeProxy', array(), $this->initializer98f21) || 1) && $this->valueHolder524a5 = $valueHolder524a5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder524a5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder524a5;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
