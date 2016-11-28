<?php

namespace M6Web\Component\ElasticsearchMock;

use Elasticsearch\Namespaces\CatNamespace;
use Elasticsearch\Namespaces\ClusterNamespace;
use Elasticsearch\Namespaces\IndicesNamespace;
use Elasticsearch\Namespaces\NodesNamespace;
use Elasticsearch\Namespaces\SnapshotNamespace;
use Elasticsearch\Transport;

/**
* Elasticsearch mock class
*
*/
class Client extends \Elasticsearch\Client
{
    /**
     * @var mixed Methods' results
     */
    protected $results = [];

    /**
     * @var mixed Methods' calls
     */
    protected $calls = [];

    /**
     * Client constructor.
     *
     * @param Transport $transport
     * @param callable  $endpoint
     */
    public function __construct(Transport $transport = null, callable $endpoint = null)
    {
        // Do nothing.
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function info($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return bool
     */
    public function ping($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function get($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function getSource($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function delete($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function deleteByQuery($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function count($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function countPercolate($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function percolate($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function mpercolate($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function termvectors($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function termvector($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function mtermvectors($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function exists($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function mlt($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function mget($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function msearch($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function create($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function bulk($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function index($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function suggest($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function explain($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function search($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function searchExists($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function searchShards($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function searchTemplate($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function scroll($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function clearScroll($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function update($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function getScript($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function deleteScript($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function putScript($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function getTemplate($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function deleteTemplate($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function putTemplate($params)
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function fieldStats($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function reindex($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function updateByQuery($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function renderSearchTemplate($params = [])
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * Operate on the Indices Namespace of commands
     *
     * @return IndicesNamespace
     */
    public function indices()
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * Operate on the Cluster namespace of commands
     *
     * @return ClusterNamespace
     */
    public function cluster()
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }


    /**
     * Operate on the Nodes namespace of commands
     *
     * @return NodesNamespace
     */
    public function nodes()
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }


    /**
     * Operate on the Snapshot namespace of commands
     *
     * @return SnapshotNamespace
     */
    public function snapshot()
    {
        return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * Operate on the Cat namespace of commands
     *
     * @return CatNamespace
     */
    public function cat()
    {
       return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * Operate on the Cat namespace of commands
     *
     * @return CatNamespace
     */
    public function tasks()
    {
       return $this->getMethodResult(__FUNCTION__, func_get_args());
    }

    /**
     * Try to find a result and logs the call
     *
     * @param string $method
     * @param array  $arguments
     *
     * @throws \Exception
     * @return mixed
     */
    protected function getMethodResult($method, array $arguments)
    {
        if (!is_callable(['Elasticsearch\Client', $method])) {
            trigger_error(
                sprintf('Call to undefined or protected/private method %s::%s()', get_called_class(), $method),
                E_USER_ERROR
            );
        }

        if (empty($this->results[$method])) {
            throw new \Exception(
                sprintf("ElasticsearchMock results is empty for %s", $method)
            );
        }

        $this->calls[$method][] = $arguments;

        return array_shift($this->results[$method]);
    }

    /**
     * @return array
     */
    public function getMethodCalls()
    {
        return $this->calls;
    }

    /**
     * @param string $method
     *
     * @return array
     */
    public function getNextMethodCalls($method)
    {
        if (!empty($this->calls[$method])) {
            return array_shift($this->calls[$method]);
        }

        return [];
    }

    /**
     * Reset the calls
     *
     * @return Client
     */
    public function resetCalls()
    {
        $this->calls = [];

        return $this;
    }

    /**
     * Add a result
     *
     * @param string $method
     * @param mixed  $result
     *
     * @return Client
     */
    public function addResult($method, $result)
    {
        $this->results[$method][] = $result;

        return $this;
    }

    /**
     * Add a search result
     *
     * @param string $index
     * @param string $type
     * @param array  $documents
     *
     * @return Client
     */
    public function addSearchResult($index, $type, array $documents)
    {
        $result = [
            'took' => 5,
            'timed_out' => false,
            '_shards' => [ 'total' => 5, 'successful' => 5, 'failed' => 0 ],
            'hits' => [
                'total' => count($documents),
                'max_score' => 1,
                'hits' => []
            ]
        ];

        foreach ($documents as $document) {
            $result['hits']['hits'][] = [
                '_index' => $index,
                '_type' => $type,
                '_id' => $document['id'],
                '_score' => 1,
                '_source' => $document
            ];
        }

        return $this->addResult('search', $result);
    }

    /**
     * Reset the results
     *
     * @return Client
     */
    public function resetResults()
    {
        $this->results = [];

        return $this;
    }
}
