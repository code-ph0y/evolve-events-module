<?php
namespace EventsModule\Storage;

use EventsModule\Storage\Base as BaseStorage;
use EventsModule\Entity\EventLocation as EventLocationEntity;

class EventLocation extends BaseStorage
{
    protected $meta_data = array(
        'conn'      => 'main',
        'table'     => 'event_locations',
        'primary'   => 'id',
        'fetchMode' => \PDO::FETCH_ASSOC
    );

    /**
     * Get a blank event location enitity
     *
     * @return mixed
     */
    public function getBlankEntity()
    {
        return new EventLocationEntity();
    }

    /**
     * Make an entity
     *
     * @param  $event_data
     * @return mixed
     */
    public function makeEntity($event_data)
    {
        return new EventLocationEntity($event_data);
    }

    /**
     * Get a event location entity by its Id
     *
     * @param $id
     * @return mixed
     * @throws \Exception
     */
    public function getById($id)
    {
        $row = $this->findById($id);

        if ($row === false) {
            throw new \Exception('Unable to obtain event location row for id: ' . $id);
        }

        return new EventLocationEntity($row);
    }

    /**
     * Find a event record by its Id
     *
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $row = $this->ds->createQueryBuilder()
            ->select('e.*')
            ->from($this->meta_data['table'], 'e')
            ->andWhere('e.id = :id')->setParameter(':id', $id)
            ->execute()
            ->fetch($this->meta_data['fetchMode']);
    }

    /**
     * Get all entity records
     *
     * @return array EventLocationEntity
     */
    public function getAll()
    {
        $rows = $this->ds->createQueryBuilder()
            ->select('el.*')
            ->from($this->meta_data['table'], 'el')
            ->execute()
            ->fetchAll($this->meta_data['fetchMode']);

        return $this->assocToEntities($rows);
    }

    /**
     * Delete a event by their Id
     *
     * @param  integer $id
     * @return mixed
     */
    public function deleteById($id)
    {
        return $this->delete(array($this->getPrimaryKey() => $id));
    }

    /**
     * Create a event record
     *
     * @param  array $event
     * @return integer
     */
    public function create(array $eventLocationData)
    {
        $this->ds->insert($this->meta_data['table'], $eventLocationData);
        return $this->ds->lastInsertId();
    }

    /**
     * Update a event record
     *
     * @param  integer $id
     * @param  array   $eventLocationData
     * @return integer returns the rows affected
     */
    public function update($id, array $eventLocationData)
    {
        return $this->ds->update(
            $this->meta_data['table'],
            $eventLocationData,
            array($this->meta_data['primary'] => $id)
        );
    }

    /**
     * Convert Assoc Array to Event Entity Objects
     *
     * @param  Array $rows
     * @return Array
     */
    public function assocToEntities($rows)
    {
        $ent = array();

        foreach ($rows as $r) {
            $ent[] = new EventLocationEntity($r);
        }

        return $ent;
    }
}
