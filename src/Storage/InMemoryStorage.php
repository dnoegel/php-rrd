<?php

namespace Dnoegel\PhpRrd\Storage;

use Dnoegel\PhpRrd\DataSource\DataSourceCollection;
use Dnoegel\PhpRrd\DataSource\DataSourceInterface;
use Dnoegel\PhpRrd\RoundRobinArchive\RoundRobinArchiveCollection;
use Dnoegel\PhpRrd\RoundRobinArchive\RoundRobinArchiveInterface;
use Dnoegel\PhpRrd\Update\UpdateCollection;

class InMemoryStorage implements StorageInterface
{
    private $storage = [];

    public function create($name, $start, $step, DataSourceCollection $dataStorageCollection, RoundRobinArchiveCollection $roundRobinArchiveCollection)
    {
        $this->storage[$name] = [
            // config
            'start' => $start,
            'step' => $step,

            // definitions
            'ds_definition' => $dataStorageCollection,
            'rra_definition' => $roundRobinArchiveCollection,

            // values
            'ds' => $this->createDataStorageStatus($dataStorageCollection),
            'rra' => $this->createRoundRobinArchive($roundRobinArchiveCollection)
        ];
    }

    public function update(UpdateCollection $update)
    {
    }

    private function createRoundRobinArchive($roundRobinArchiveCollection)
    {
        $result = [];

        /** @var RoundRobinArchiveInterface $rra */
        foreach ($roundRobinArchiveCollection as $rra) {
            $result[] = [
                'consolidation_function' => $rra->getConsolidationFunction()->getName()
            ];
        }

        return $result;
    }

    private function createDataStorageStatus(DataSourceCollection $dataStorageCollection)
    {
        $result = [];

        /** @var DataSourceInterface $data */
        foreach ($dataStorageCollection as $data) {
            $result[$data->getName()] = [
                'last' => null,
                'value' => null,
                'unknown'=> null
            ];
        }

        return $result;
    }

}