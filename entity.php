<?php


class Entity implements Annotation
{
    /**
     * @var string
     */
    public $repositoryClass;

    /**
     * @var boolean
     */
    public $readOnly = false;
}
