<?php

namespace Dnoegel\PhpRrd;

use Dnoegel\PhpRrd\DataSource\DataSourceCollection;
use Dnoegel\PhpRrd\RoundRobinArchive\RoundRobinArchiveCollection;
use Dnoegel\PhpRrd\Storage\StorageInterface;
use Dnoegel\PhpRrd\Update\UpdateCollection;

class RoundRobinDatabase implements StorageInterface
{
    const TIMESTAMP_NOW = 'NOW';

    /**
     * @var StorageInterface
     */
    private $storage;

    /**
     * @param StorageInterface $storage
     */
    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function create($name, $start, $step, DataSourceCollection $dataStorageCollection, RoundRobinArchiveCollection $roundRobinArchiveCollection)
    {
        if ($start == self::TIMESTAMP_NOW) {
            $start = time();
        }

        return $this->storage->create($name, $start, $step, $dataStorageCollection, $roundRobinArchiveCollection);
    }

    public function update(UpdateCollection $update)
    {
        return $this->storage->update($update);
    }
}