<?php

namespace M6Web\Component\ElasticsearchMock;

/**
* Elasticsearch mock class
*
*/
class Client extends \Elasticsearch\Client
{
    /**
     * @var methods' results
     */
    protected $results = array();

    /**
     * @var methods' calls
     */
    protected $calls = array();

    /**
     * Client constructor
     *
     * @param array $params Array of injectable parameters
     */
    public function __construct($params = array())
    {

    }

    /**
     * @return array
     */
    public function info()
    {
        return $this->getMethodResult('info', func_get_args());
    }

    /**
     * @return boolean
     */
    public function ping()
    {
        return $this->getMethodResult('ping', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function get($params)
    {
        return $this->getMethodResult('get', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function getSource($params)
    {
        return $this->getMethodResult('getSource', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function delete($params)
    {
        return $this->getMethodResult('delete', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function deleteByQuery($params = array())
    {
        return $this->getMethodResult('deleteByQuery', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function count($params = array())
    {
        return $this->getMethodResult('count', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function countPercolate($params = array())
    {
        return $this->getMethodResult('countPercolate', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function percolate($params)
    {
        return $this->getMethodResult('percolate', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function mpercolate($params = array())
    {
        return $this->getMethodResult('mpercolate', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function termvector($params = array())
    {
        return $this->getMethodResult('termvector', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function mtermvectors($params = array())
    {
        return $this->getMethodResult('mtermvectors', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function exists($params)
    {
        return $this->getMethodResult('exists', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function mlt($params)
    {
        return $this->getMethodResult('mlt', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function mget($params = array())
    {
        return $this->getMethodResult('mget', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function msearch($params = array())
    {
        return $this->getMethodResult('msearch', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function create($params)
    {
        return $this->getMethodResult('create', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function bulk($params = array())
    {
        return $this->getMethodResult('bulk', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function index($params)
    {
        return $this->getMethodResult('index', func_get_args());
    }


    /**
     * @param array $params
     *
     * @return array
     */
    public function suggest($params = array())
    {
        return $this->getMethodResult('suggest', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function explain($params)
    {
        return $this->getMethodResult('explain', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function search($params = array())
    {
        return $this->getMethodResult('search', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function searchShards($params = array())
    {
        return $this->getMethodResult('searchShards', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function searchTemplate($params = array())
    {
        return $this->getMethodResult('searchTemplate', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function scroll($params = array())
    {
        return $this->getMethodResult('scroll', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function clearScroll($params = array())
    {
        return $this->getMethodResult('clearScroll', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function update($params)
    {
        return $this->getMethodResult('update', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function getScript($params)
    {
        return $this->getMethodResult('getScript', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function deleteScript($params)
    {
        return $this->getMethodResult('deleteScript', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function putScript($params)
    {
        return $this->getMethodResult('putScript', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function getTemplate($params)
    {
        return $this->getMethodResult('getTemplate', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function deleteTemplate($params)
    {
        return $this->getMethodResult('deleteTemplate', func_get_args());
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function putTemplate($params)
    {
        return $this->getMethodResult('putTemplate', func_get_args());
    }

    /**
     * Operate on the Indices Namespace of commands
     *
     * @return IndicesNamespace
     */
    public function indices()
    {
        return $this->getMethodResult('indices', func_get_args());
    }

    /**
     * Operate on the Cluster namespace of commands
     *
     * @return ClusterNamespace
     */
    public function cluster()
    {
        return $this->getMethodResult('cluster', func_get_args());
    }


    /**
     * Operate on the Nodes namespace of commands
     *
     * @return NodesNamespace
     */
    public function nodes()
    {
        return $this->getMethodResult('nodes', func_get_args());
    }


    /**
     * Operate on the Snapshot namespace of commands
     *
     * @return SnapshotNamespace
     */
    public function snapshot()
    {
        return $this->getMethodResult('snapshot', func_get_args());
    }


    /**
     * Operate on the Cat namespace of commands
     *
     * @return CatNamespace
     */
    public function cat()
    {
       return $this->getMethodResult('cat', func_get_args());
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
     * @param string $method
     *
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
        $this->calls = array();

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
                '_source' => [ $type => $document ]
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
        $this->results = array();

        return $this;
    }
}