<?php namespace BlackIT\SemanticForm\ErrorStore;

interface ErrorStoreInterface
{
    public function hasError($key);
    public function getError($key);
}
