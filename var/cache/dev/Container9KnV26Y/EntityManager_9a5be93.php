<?php

namespace Container9KnV26Y;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder19714 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer28da6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa476b = [
        
    ];

    public function getConnection()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getConnection', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getMetadataFactory', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getExpressionBuilder', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'beginTransaction', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getCache', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getCache();
    }

    public function transactional($func)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'transactional', array('func' => $func), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'wrapInTransaction', array('func' => $func), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'commit', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->commit();
    }

    public function rollback()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'rollback', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getClassMetadata', array('className' => $className), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'createQuery', array('dql' => $dql), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'createNamedQuery', array('name' => $name), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'createQueryBuilder', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'flush', array('entity' => $entity), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'clear', array('entityName' => $entityName), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->clear($entityName);
    }

    public function close()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'close', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->close();
    }

    public function persist($entity)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'persist', array('entity' => $entity), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'remove', array('entity' => $entity), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'refresh', array('entity' => $entity), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'detach', array('entity' => $entity), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'merge', array('entity' => $entity), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getRepository', array('entityName' => $entityName), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'contains', array('entity' => $entity), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getEventManager', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getConfiguration', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'isOpen', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getUnitOfWork', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getProxyFactory', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'initializeObject', array('obj' => $obj), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'getFilters', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'isFiltersStateClean', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'hasFilters', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return $this->valueHolder19714->hasFilters();
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

        $instance->initializer28da6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder19714) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder19714 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder19714->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, '__get', ['name' => $name], $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        if (isset(self::$publicPropertiesa476b[$name])) {
            return $this->valueHolder19714->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19714;

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

        $targetObject = $this->valueHolder19714;
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
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19714;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder19714;
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
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, '__isset', array('name' => $name), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19714;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder19714;
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
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, '__unset', array('name' => $name), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19714;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder19714;
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
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, '__clone', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        $this->valueHolder19714 = clone $this->valueHolder19714;
    }

    public function __sleep()
    {
        $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, '__sleep', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;

        return array('valueHolder19714');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer28da6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer28da6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer28da6 && ($this->initializer28da6->__invoke($valueHolder19714, $this, 'initializeProxy', array(), $this->initializer28da6) || 1) && $this->valueHolder19714 = $valueHolder19714;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder19714;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder19714;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
