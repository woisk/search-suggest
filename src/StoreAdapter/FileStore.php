<?php

namespace Callwoola\SearchSuggest\StoreAdapter;


class FileStore implements StoreInterface
{
    private $name = '';

    private $value = [];


    public function __construct()
    {
        //        $this->path = __DIR__ . '/../../temp';
    }

    public function store($name, $value)
    {
        file_put_contents($this->name, serialize($this->value));
    }


    public function  find($name)
    {
        return null;
    }

    public function key($name = '')
    {
        $this->name = $name;
    }

    public function value($array = [])
    {
        $this->value = $array;
    }


    /**
     * @param string $name
     * @return mixed
     */
    public function get($name)
    {
    }


}