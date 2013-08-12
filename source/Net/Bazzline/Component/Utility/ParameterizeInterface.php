<?php

interface ParameterizeInterface
{
    public function addParameter($name, $value);

    public function addParameters(array $parameters);
 
    public function hasParameter($name);

    public function getParameter($name, $default = null);
}
