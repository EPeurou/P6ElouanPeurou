<?php

namespace ContainerGmzMpCo;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereefbc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb956f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9707d = [
        
    ];

    public function getConnection()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getConnection', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getMetadataFactory', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getExpressionBuilder', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'beginTransaction', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getCache', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'transactional', array('func' => $func), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'commit', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->commit();
    }

    public function rollback()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'rollback', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getClassMetadata', array('className' => $className), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'createQuery', array('dql' => $dql), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'createNamedQuery', array('name' => $name), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'createQueryBuilder', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'flush', array('entity' => $entity), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'clear', array('entityName' => $entityName), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->clear($entityName);
    }

    public function close()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'close', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->close();
    }

    public function persist($entity)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'persist', array('entity' => $entity), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'remove', array('entity' => $entity), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'refresh', array('entity' => $entity), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'detach', array('entity' => $entity), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'merge', array('entity' => $entity), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'contains', array('entity' => $entity), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getEventManager', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getConfiguration', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'isOpen', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getUnitOfWork', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getProxyFactory', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'initializeObject', array('obj' => $obj), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'getFilters', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'isFiltersStateClean', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'hasFilters', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return $this->valueHoldereefbc->hasFilters();
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

        $instance->initializerb956f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereefbc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereefbc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereefbc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, '__get', ['name' => $name], $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        if (isset(self::$publicProperties9707d[$name])) {
            return $this->valueHoldereefbc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereefbc;

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

        $targetObject = $this->valueHoldereefbc;
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
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereefbc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereefbc;
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
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, '__isset', array('name' => $name), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereefbc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereefbc;
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
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, '__unset', array('name' => $name), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereefbc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereefbc;
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
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, '__clone', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        $this->valueHoldereefbc = clone $this->valueHoldereefbc;
    }

    public function __sleep()
    {
        $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, '__sleep', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;

        return array('valueHoldereefbc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb956f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb956f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb956f && ($this->initializerb956f->__invoke($valueHoldereefbc, $this, 'initializeProxy', array(), $this->initializerb956f) || 1) && $this->valueHoldereefbc = $valueHoldereefbc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereefbc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereefbc;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
