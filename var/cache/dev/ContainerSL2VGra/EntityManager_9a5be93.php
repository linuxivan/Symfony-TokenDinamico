<?php

namespace ContainerSL2VGra;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder99483 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd7c20 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0f068 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getConnection', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getMetadataFactory', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getExpressionBuilder', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'beginTransaction', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getCache', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'transactional', array('func' => $func), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'commit', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->commit();
    }

    public function rollback()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'rollback', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getClassMetadata', array('className' => $className), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'createQuery', array('dql' => $dql), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'createNamedQuery', array('name' => $name), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'createQueryBuilder', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'flush', array('entity' => $entity), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'clear', array('entityName' => $entityName), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->clear($entityName);
    }

    public function close()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'close', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->close();
    }

    public function persist($entity)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'persist', array('entity' => $entity), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'remove', array('entity' => $entity), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'refresh', array('entity' => $entity), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'detach', array('entity' => $entity), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'merge', array('entity' => $entity), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'contains', array('entity' => $entity), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getEventManager', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getConfiguration', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'isOpen', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getUnitOfWork', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getProxyFactory', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'initializeObject', array('obj' => $obj), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'getFilters', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'isFiltersStateClean', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'hasFilters', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return $this->valueHolder99483->hasFilters();
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

        $instance->initializerd7c20 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder99483) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder99483 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder99483->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, '__get', ['name' => $name], $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        if (isset(self::$publicProperties0f068[$name])) {
            return $this->valueHolder99483->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99483;

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

        $targetObject = $this->valueHolder99483;
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
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99483;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder99483;
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
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, '__isset', array('name' => $name), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99483;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder99483;
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
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, '__unset', array('name' => $name), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99483;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder99483;
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
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, '__clone', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        $this->valueHolder99483 = clone $this->valueHolder99483;
    }

    public function __sleep()
    {
        $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, '__sleep', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;

        return array('valueHolder99483');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd7c20 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd7c20;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd7c20 && ($this->initializerd7c20->__invoke($valueHolder99483, $this, 'initializeProxy', array(), $this->initializerd7c20) || 1) && $this->valueHolder99483 = $valueHolder99483;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder99483;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder99483;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
