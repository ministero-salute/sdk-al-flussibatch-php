<?php
namespace AccessLayerMdS;

require 'loader.php';

use AccessLayerMdS\AccessLayerCore;

class AccessLayer extends AccessLayerCore
{
    function __construct()
    {
        parent::setRemotePath("http://localhost:8080");
        parent::setEndpoint("v1/flusso");
        parent::setFluxName("<nome_flusso>");
    }
}