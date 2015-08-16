<?php

namespace Dnoegel\PhpRrd\Storage;

use Dnoegel\PhpRrd\DataSource\DataSourceCollection;
use Dnoegel\PhpRrd\RoundRobinArchive\RoundRobinArchiveCollection;
use Dnoegel\PhpRrd\Update\UpdateCollection;

interface StorageInterface
{
    public function create($name, $start, $step, DataSourceCollection $dataStorageCollection, RoundRobinArchiveCollection $roundRobinArchiveCollection);

    public function update(UpdateCollection $update);
}