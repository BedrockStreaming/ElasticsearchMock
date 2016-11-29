<?php

namespace M6Web\Component\ElasticsearchMock;

/**
 * Class ClientBuilder
 *
 * @package M6Web\Component\ElasticsearchMock
 */
class ClientBuilder extends \Elasticsearch\ClientBuilder
{
    /**
     * @param array $config
     * @param bool  $quiet
     *
     * @inheritdoc
     *
     * @return mixed
     */
    public static function fromConfig($config, $quiet = false)
    {
        $builder = static::create();

        foreach ($config as $key => $value) {
            $method = "set$key";
            if (method_exists($builder, $method)) {
                $builder->$method($value);
                unset($config[$key]);
            }
        }

        if ($quiet === false && count($config) > 0) {
            $unknown = implode(array_keys($config));
            throw new \RuntimeException("Unknown parameters provided: $unknown");
        }

        return $builder->build();
    }

    protected function instantiate(\Elasticsearch\Transport $transport, callable $endpoint)
    {
        return new Client($transport, $endpoint);
    }
}
