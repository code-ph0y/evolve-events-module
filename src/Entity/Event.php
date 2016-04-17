<?php

namespace EventsModule\Entity;

class Event
{
    protected $id        = null;
    protected $name      = null;
    protected $address_1 = null;
    protected $address_2 = null;
    protected $address_3 = null;
    protected $postcode  = null;

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of Address 1
     *
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address_1;
    }

    /**
     * Get the value of Address 2
     *
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address_2;
    }

    /**
     * Get the value of Address 3
     *
     * @return mixed
     */
    public function getAddress3()
    {
        return $this->address_3;
    }

    /**
     * Get the value of Postcode
     *
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
}
