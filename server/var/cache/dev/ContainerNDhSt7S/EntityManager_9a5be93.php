<?php

namespace ContainerNDhSt7S;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfb7a9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer76405 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0841 = [
        
    ];

    public function getConnection()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getConnection', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getMetadataFactory', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getExpressionBuilder', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'beginTransaction', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getCache', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getCache();
    }

    public function transactional($func)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'transactional', array('func' => $func), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'wrapInTransaction', array('func' => $func), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'commit', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->commit();
    }

    public function rollback()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'rollback', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getClassMetadata', array('className' => $className), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'createQuery', array('dql' => $dql), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'createNamedQuery', array('name' => $name), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'createQueryBuilder', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'flush', array('entity' => $entity), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'clear', array('entityName' => $entityName), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->clear($entityName);
    }

    public function close()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'close', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->close();
    }

    public function persist($entity)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'persist', array('entity' => $entity), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'remove', array('entity' => $entity), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'refresh', array('entity' => $entity), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'detach', array('entity' => $entity), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'merge', array('entity' => $entity), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'contains', array('entity' => $entity), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getEventManager', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getConfiguration', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'isOpen', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getUnitOfWork', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getProxyFactory', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'initializeObject', array('obj' => $obj), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'getFilters', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'isFiltersStateClean', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'hasFilters', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return $this->valueHolderfb7a9->hasFilters();
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

        $instance->initializer76405 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfb7a9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfb7a9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfb7a9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, '__get', ['name' => $name], $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        if (isset(self::$publicPropertiesb0841[$name])) {
            return $this->valueHolderfb7a9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb7a9;

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

        $targetObject = $this->valueHolderfb7a9;
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
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb7a9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfb7a9;
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
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, '__isset', array('name' => $name), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb7a9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfb7a9;
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
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, '__unset', array('name' => $name), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb7a9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfb7a9;
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
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, '__clone', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        $this->valueHolderfb7a9 = clone $this->valueHolderfb7a9;
    }

    public function __sleep()
    {
        $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, '__sleep', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;

        return array('valueHolderfb7a9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer76405 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer76405;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer76405 && ($this->initializer76405->__invoke($valueHolderfb7a9, $this, 'initializeProxy', array(), $this->initializer76405) || 1) && $this->valueHolderfb7a9 = $valueHolderfb7a9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfb7a9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfb7a9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
