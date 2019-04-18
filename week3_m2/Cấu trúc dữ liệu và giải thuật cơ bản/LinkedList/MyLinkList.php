<?php
class MyLinkList
{

    public $data;

    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readMyLinkList()
    {
        return $this->data;
    }
}