<?php

namespace EventsModule\Entity;

class EventLocation
{
    protected $id                = null;
    protected $location_id       = null;
    protected $name              = null;
    protected $short_description = null;
    protected $description       = null;
    protected $datetime_from     = null;
    protected $datetime_to       = null;
    protected $datetime_created  = null;

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
     * Get the value of Location Id
     *
     * @return mixed
     */
    public function getLocationId()
    {
        return $this->location_id;
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
     * Get the value of Short Description
     *
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of Datetime From
     *
     * @return mixed
     */
    public function getDatetimeFrom()
    {
        return $this->datetime_from;
    }

    /**
     * Get the value of Datetime To
     *
     * @return mixed
     */
    public function getDatetimeTo()
    {
        return $this->datetime_to;
    }

    /**
     * Get the value of Datetime Created
     *
     * @return mixed
     */
    public function getDatetimeCreated()
    {
        return $this->datetime_created;
    }
}
