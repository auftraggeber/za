<?php

namespace de\langnerdev\za\view;

class SideBar {

    public static function print()
    {
        echo "<div class=\"sidebar\">";
        echo "<div class=\"sidebar-section sidebar-time\">";
        echo "<h1 class=\"center-text-self\">Sprechzeiten</h1><h2 class=\"center-text-self\">Heute</h2>";
        echo "Aktuell keine Informationen über die Sprechzeiten vorhanden.";
        echo "</div>";

        echo "<div class=\"sidebar-section sidebar-information\">";
        echo "<h1 class=\"center-text-self\">Weitere Informationen</h1>";
        echo "Aktuell keine weiteren Informationen vorhanden.";
        echo "</div>";

        echo "</div>";
    }

}