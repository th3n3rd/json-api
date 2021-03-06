<?php namespace Tobscure\JsonApi\Elements;

interface ElementInterface
{
    public function __construct($type, $href);

    public function getId();

    public function getType();

    public function getHref();

    public function getResources();

    public function toArray();
}
