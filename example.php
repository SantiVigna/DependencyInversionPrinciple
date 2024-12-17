<?php

class FrontendDeveloper {
    public function writeCode() {
        return "Escribiendo código HTML y CSS";
    }
}

class BackendDeveloper {
    public function writeCode() {
        return "Escribiendo código en PHP";
    }
}

/* class FullStackDeveloper {
    public function writeCode() {
        return "Escribiendo código de Front y de Back";
    }
} */

class Project {
    private $frontendDev;
    private $backendDev;
    /* private $fullStackDev; */

    public function __construct() {
        $this->frontendDev = new FrontendDeveloper();
        $this->backendDev = new BackendDeveloper();
        /* $this->fullStackDev = new FullStackDeveloper(); */
    }

    public function develop() {
        return $this->frontendDev->writeCode() . "\n" . $this->backendDev->writeCode()/*  . "\n" . $this->fullStackDev->writeCode() */;
    }
}

// Uso
$project = new Project();
echo $project->develop();

?>