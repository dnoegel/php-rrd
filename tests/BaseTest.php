<?php

use Dnoegel\PhpRrd\Consolidator\AverageConsolidator;
use Dnoegel\PhpRrd\DataSource\DataSource;
use Dnoegel\PhpRrd\DataSource\DataSourceCollection;
use Dnoegel\PhpRrd\DataSource\Type\GaugeType;
use Dnoegel\PhpRrd\RoundRobinArchive\RoundRobinArchive;
use Dnoegel\PhpRrd\RoundRobinArchive\RoundRobinArchiveCollection;

class BaseTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $rrd = new \Dnoegel\PhpRrd\RoundRobinDatabase(
            new \Dnoegel\PhpRrd\Storage\InMemoryStorage()
        );

        $rrd->create(
            'test',     // name
            'NOW',      // start
            1,          // step
            new DataSourceCollection([
                new DataSource('temperatur', new GaugeType(1, 1, 1))
            ]),
            new RoundRobinArchiveCollection([
                new RoundRobinArchive(new AverageConsolidator(0.5, 2, 1000))
            ])
        );

        $rrd->update(new \Dnoegel\PhpRrd\Update\UpdateCollection([
            new \Dnoegel\PhpRrd\Update\Update('temperatur', 18)
        ]));

        $this->assertInstanceOf(\Dnoegel\PhpRrd\RoundRobinDatabase::class, $rrd);

    }
}