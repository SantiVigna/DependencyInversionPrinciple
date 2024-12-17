<?php

// Abstracción: Interfaz para cualquier tipo de desarrollador
interface Developer {
    public function writeCode();
}

// Implementaciones concretas
class FrontendDeveloper implements Developer {
    public function writeCode() {
        return "Escribiendo código HTML y CSS";
    }
}

class BackendDeveloper implements Developer {
    public function writeCode() {
        return "Escribiendo código en PHP";
    }
}

/* class FullStackDeveloper implements Developer {
    public function writeCode() {
        return "Escribiendo código de Front y de Back";
    }
} */

// Clase de alto nivel que depende de la abstracción (Developer)
class Project {
    private $developers = [];

    // Inyección de dependencias a través del constructor
    public function __construct(array $developers) {
        $this->developers = $developers;
    }

    public function develop() {
        $output = "";
        foreach ($this->developers as $developer) {
            $output .= $developer->writeCode() . "\n";
        }
        return $output;
    }
}

// Uso
$frontendDev = new FrontendDeveloper();
$backendDev = new BackendDeveloper();
/* $fullStackDev = new FullStackDeveloper(); */

$project = new Project([$frontendDev, $backendDev/* , $fullStackDev */]);
echo $project->develop();

?>