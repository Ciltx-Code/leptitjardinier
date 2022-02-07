<?php

namespace ContainerRziv4xj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb6599 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer24f8a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa8f61 = [
        
    ];

    public function getConnection()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getConnection', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getMetadataFactory', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getExpressionBuilder', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'beginTransaction', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getCache', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getCache();
    }

    public function transactional($func)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'transactional', array('func' => $func), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'wrapInTransaction', array('func' => $func), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'commit', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->commit();
    }

    public function rollback()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'rollback', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getClassMetadata', array('className' => $className), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'createQuery', array('dql' => $dql), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'createNamedQuery', array('name' => $name), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'createQueryBuilder', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'flush', array('entity' => $entity), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'clear', array('entityName' => $entityName), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->clear($entityName);
    }

    public function close()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'close', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->close();
    }

    public function persist($entity)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'persist', array('entity' => $entity), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'remove', array('entity' => $entity), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'refresh', array('entity' => $entity), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'detach', array('entity' => $entity), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'merge', array('entity' => $entity), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getRepository', array('entityName' => $entityName), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'contains', array('entity' => $entity), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getEventManager', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getConfiguration', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'isOpen', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getUnitOfWork', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getProxyFactory', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'initializeObject', array('obj' => $obj), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'getFilters', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'isFiltersStateClean', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'hasFilters', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return $this->valueHolderb6599->hasFilters();
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

        $instance->initializer24f8a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb6599) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb6599 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb6599->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, '__get', ['name' => $name], $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        if (isset(self::$publicPropertiesa8f61[$name])) {
            return $this->valueHolderb6599->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6599;

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

        $targetObject = $this->valueHolderb6599;
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
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6599;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb6599;
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
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, '__isset', array('name' => $name), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6599;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb6599;
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
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, '__unset', array('name' => $name), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6599;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb6599;
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
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, '__clone', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        $this->valueHolderb6599 = clone $this->valueHolderb6599;
    }

    public function __sleep()
    {
        $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, '__sleep', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;

        return array('valueHolderb6599');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer24f8a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer24f8a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer24f8a && ($this->initializer24f8a->__invoke($valueHolderb6599, $this, 'initializeProxy', array(), $this->initializer24f8a) || 1) && $this->valueHolderb6599 = $valueHolderb6599;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb6599;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb6599;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
