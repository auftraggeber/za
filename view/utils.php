<?php
namespace de\langnerdev\za\view;


class DocUtils {
    public static function printHeadTags(string $title): void {
        echo "<title>$title</title>";
        echo "<link rel=\"stylesheet\" href=\"view/style/def.css\">";
    }
}

class Anker {
    
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function print(): void {
        echo "<a id=\"". $this->getIdName() ."\" class=\"anker\"></a>";
    }

    public function getIdName(): string {
        return "a-" .  $this->name;
    }
}