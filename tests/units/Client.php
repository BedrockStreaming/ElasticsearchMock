<?php
namespace M6Web\Component\ElasticsearchMock\tests\units;

use mageekguy\atoum\test;
use M6Web\Component\ElasticsearchMock;
use mageekguy\atoum\exception;

/**
 * Elasticsearch mock test
 */
class Client extends test
{
    public function testMethods()
    {
        $methodList = $this->getClientMethods();
        $esMock = new ElasticsearchMock\Client();

        // Add results
        $results = [];
        foreach ($methodList as $method) {
            $this
                ->if($results[$method] = uniqid())
                ->object($esMock->addResult($method, $results[$method]))
                    ->isEqualTo($esMock)
            ;
        }

        // Call all methods
        $calls = [];
        foreach ($methodList as $method) {
            $this
                ->if($calls[$method][] = [[uniqid()]])
                ->executeOnFailure(function() use ($method) { echo "Error method $method"; })
                    ->string($esMock->$method([$calls[$method][0][0][0]]))
                        ->isEqualTo($results[$method])
                    ->exception(
                        function() use ($esMock, $method) {
                            $esMock->$method([uniqid()]);
                        }
                    )
                        ->hasMessage("ElasticsearchMock results is empty for $method")
            ;
        }

        // Check
        $this
            ->if($esMock)
            ->array($esMock->getMethodCalls())
                ->isEqualTo($calls)
        ;

        // Check and clean
        foreach ($methodList as $method) {
            $this
                ->if($esMock)
                ->array($esMock->getNextMethodCalls($method))
                    ->isEqualTo($calls[$method][0])
            ;
        }

        // Values must be empty
        $this
            ->if($esMock)
            ->array($esMock->getMethodCalls())
                ->isEqualTo(array_fill_keys($methodList, []))
        ;
    }

    public function testSearchResult()
    {
        $this
            ->if($esMock = new ElasticsearchMock\Client())
            ->and($index = 'myindex')
            ->and($type = 'mytype')
            ->and($docs = [['id' => '12', 'field' => 'value']])
            ->and($params = ['params' => 'value'])
                ->object($esMock->addSearchResult($index, $type, $docs))
                    ->isEqualTo($esMock)
                ->array($esMock->search($params))
                    ->isEqualTo([
                        'took' => 5,
                        'timed_out' => false,
                        '_shards' => [
                            'total' => 5,
                            'successful' => 5,
                            'failed' => 0,
                        ],
                        'hits' => [
                            'total' => 1,
                            'max_score' => 1,
                            'hits' => [[
                                '_index' => "myindex",
                                '_type' => "mytype",
                                '_id' => '12',
                                '_score' => 1,
                                '_source' => [
                                    'id' => '12',
                                    'field' => "value",
                                ]
                            ]]
                        ]
                    ])
                ->exception(
                        function() use ($esMock) {
                            $esMock->search([uniqid()]);
                        }
                    )
                    ->hasMessage("ElasticsearchMock results is empty for search")
                ->array($esMock->getNextMethodCalls('search'))
                    ->isEqualTo([$params])
                ->array($esMock->getNextMethodCalls('search'))
                    ->isEqualTo([])
        ;
    }

    protected function getClientMethods()
    {
        $excludeMethods = [
            '__construct', 'extractArgument',
            'addResult', 'addSearchResult', 'resetResults',
            'getMethodCalls', 'getNextMethodCalls', 'resetCalls'
        ];

        $reflec = new \ReflectionClass('M6Web\Component\ElasticsearchMock\Client');

        $methodList = [];
        foreach ($reflec->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
            $name = $method->getName();
            if (in_array($name, $excludeMethods)) {
                continue;
            }

            $methodList[] = $name;
        }

        return $methodList;
    }
}