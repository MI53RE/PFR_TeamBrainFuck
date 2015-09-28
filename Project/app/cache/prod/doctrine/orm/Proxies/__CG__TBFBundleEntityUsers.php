<?php

namespace Proxies\__CG__\TBFBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \TBFBundle\Entity\Users implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'TBFBundle\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'TBFBundle\\Entity\\Users' . "\0" . 'firstname', '' . "\0" . 'TBFBundle\\Entity\\Users' . "\0" . 'lastname', '' . "\0" . 'TBFBundle\\Entity\\Users' . "\0" . 'projects', '' . "\0" . 'TBFBundle\\Entity\\Users' . "\0" . 'skills');
        }

        return array('__isInitialized__', '' . "\0" . 'TBFBundle\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'TBFBundle\\Entity\\Users' . "\0" . 'firstname', '' . "\0" . 'TBFBundle\\Entity\\Users' . "\0" . 'lastname', '' . "\0" . 'TBFBundle\\Entity\\Users' . "\0" . 'projects', '' . "\0" . 'TBFBundle\\Entity\\Users' . "\0" . 'skills');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Users $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', array($firstname));

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', array());

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', array($lastname));

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', array());

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setProjects($projects)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjects', array($projects));

        return parent::setProjects($projects);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjects()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjects', array());

        return parent::getProjects();
    }

    /**
     * {@inheritDoc}
     */
    public function addProject(\TBFBundle\Entity\Projects $projects)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProject', array($projects));

        return parent::addProject($projects);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProject(\TBFBundle\Entity\Projects $projects)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProject', array($projects));

        return parent::removeProject($projects);
    }

    /**
     * {@inheritDoc}
     */
    public function addSkill(\TBFBundle\Entity\Skills $skills)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSkill', array($skills));

        return parent::addSkill($skills);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSkill(\TBFBundle\Entity\Skills $skills)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSkill', array($skills));

        return parent::removeSkill($skills);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkills()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkills', array());

        return parent::getSkills();
    }

}
