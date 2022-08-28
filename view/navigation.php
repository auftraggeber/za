<?php
namespace de\langnerdev\za\view;

class NavBar {
    public static function print(int $selectedIndex = -1): void {
        echo "<div class=\"content-overflow-blocker\"></div>";
        echo "<nav class=\"navbar\">";
        echo "<div class=\"nav-title\"><span class=\"flex\">" . self::getNavBarTitle() . "</span></div>";
        echo "<div class=\"navbar-nav-wrapper\"><ul class=\"navbar-nav\">";

    
        $link_array = self::getLinks();

        if (!empty($link_array)) {
            for ($i = 0; $i < count($link_array); $i++) {
                $link_display_name = array_keys($link_array)[$i];
                $link_href = $link_array[$link_display_name];

                $class = "nav-link";
                if ($i == $selectedIndex) {
                    $class .= " selected-nav-item";
                }
                echo "<a class=\"$class\" href=\"$link_href\"><span class=\"flex\">$link_display_name</span></a>";
            }
        }

        echo "</ul></div>";
        echo "</nav>";
    }

    /**
     * @return [String:String] Dict der Links (als Key wird der tatsächliche Name abgespeichert).
     */
    private static function getLinks(): array {
        return array(
            "Übersicht" => "index",
            "Sprechzeiten" => "index#" . (new Anker(TIMES_ANKER_NAME))->getIdName(),
            "Team" => "team",
            "Anfahrt" => "location",
            "Kontakt" => "contact"
        );
    }

    public static function getNavBarTitle():string {
        return NAVBAR_TITLE;
    }
}

define("NAVBAR_TITLE", "Zahnarztpraxis Plewinski");
define("TIMES_ANKER_NAME", "times");