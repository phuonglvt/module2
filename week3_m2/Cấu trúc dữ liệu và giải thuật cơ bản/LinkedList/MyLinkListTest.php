<?php
include_once ('MyLinkList.php');

class MyLinkListTest
{

    private $firstMyLinkList;

    private $lastMyLinkList;

    private $count;


    function __construct()
    {
        $this->firstMyLinkList = NULL;
        $this->firstMyLinkList = NULL;
        $this->count = 0;
    }

    public function isEmpty()
    {
        return ($this->firstMyLinkList == NULL);
    }

    public function insertFirst($data)
    {
        $link = new MyLinkList($data);
        $link->next = $this->firstMyLinkList;
        $this->firstMyLinkList = &$link;


        if ($this->lastMyLinkList == NULL)
            $this->lastMyLinkList = $link;

        $this->count++;
    }

    public function insertLast($data)
    {
        if ($this->firstMyLinkList != NULL) {
            $link = new MyLinkList($data);
            $this->lastMyLinkList->next = $link;
            $link->next = NULL;
            $this->lastMyLinkList = &$link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    public function deleteMyLinkList($key)
    {
        $current = $this->firstMyLinkList;
        $previous = $this->firstMyLinkList;

        while ($current->data != $key) {
            if ($current->next == NULL)
                return NULL;
            else {
                $previous = $current;
                $current = $current->next;
            }
        }

        if ($current == $this->firstMyLinkList) {
            if ($this->count == 1) {
                $this->lastMyLinkList = $this->firstMyLinkList;
            }
            $this->firstMyLinkList = $this->firstMyLinkList->next;
        } else {
            if ($this->lastMyLinkList == $current) {
                $this->lastMyLinkList = $previous;
            }
            $previous->next = $current->next;
        }
        $this->count--;
    }

    public function find($key)
    {
        $current = $this->firstMyLinkList;
        while ($current->data != $key) {
            if ($current->next == NULL)
                return null;
            else
                $current = $current->next;
        }
        return $current;
    }

    public function readMyLinkList($myLinkListPos)
    {
        if ($myLinkListPos <= $this->count) {
            $current = $this->firstMyLinkList;
            $pos = 1;
            while ($pos != $myLinkListPos) {
                if ($current->next == NULL)
                    return null;
                else
                    $current = $current->next;

                $pos++;
            }
            return $current->data;
        } else
            return NULL;
    }

    public function totalMyLinkList()
    {
        if ($this->count >= 3) {
            return $this->count;
        }
        echo "Bạn nhập ít nhất 3 số!";
    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstMyLinkList;

        while($current != NULL)
        {
            array_push($listData, $current->readMyLinkList());
            $current = $current->next;
        }
        return $listData;
    }

    public function reverseList()
    {
        if($this->firstMyLinkList != NULL)
        {
            if($this->firstMyLinkList->next != NULL)
            {
                $current = $this->firstMyLinkList;
                $new = NULL;

                while ($current != NULL)
                {
                    $temp = $current->next;
                    $current->next = $new;
                    $new = $current;
                    $current = $temp;
                }
                $this->firstMyLinkList = $new;
            }
        }
    }
}
