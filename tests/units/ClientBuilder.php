<?php

namespace M6Web\Component\ElasticsearchMock\tests\units;

use mageekguy\atoum\test;
use M6Web\Component\ElasticsearchMock;

/**
 * Elasticsearch mock test
 */
class ClientBuilder extends test
{
    public function testCreate()
    {
        $this
            ->object(ElasticsearchMock\ClientBuilder::create())
                ->isInstanceOf(ElasticsearchMock\ClientBuilder::class)
            ;
    }

    public function testFromConfig()
    {
        $this
            ->object(ElasticsearchMock\ClientBuilder::fromConfig([]))
                ->isInstanceOf(ElasticsearchMock\Client::class)
            ;
    }
}
