<?php

use openapi\entities\Product;

class ProductTest extends PHPUnit_Framework_TestCase
{
    /** @var Product $product */
    private static $product;

    public static function setUpBeforeClass()
    {
        $product_data = [
            "id" => "1004004011187773",
            "ean" => "0093155141650",
            "gpc" => "games",
            "title" => "The Elder Scrolls V: Skyrim",
            "specsTag" => "Bethesda Game Studios",
            "summary" => "PlayStation 3 | 2011",
            "rating" => 46,
            "shortDescription" => "The Elder Scroll V: Skyrim is het nieuwste deel in de veelgeprezen Elder Scroll-reeks. Met een complete nieuwe grafische engine, verbeterde actie en een prachtige spelwereld tilt The Elder Scroll V: Skyrim de rollenspel-serie naar een hoger niveau!<br /><br />The Elder Scroll V: Skyrim speelt zich af in de ijskoude provincie Skyrim in het magische land Tamriel. Skyrim, ook wel bekend als 'de keel', leent haar bijnaam aan het feit dat het boven het 'hartland' Cyrodiil ligt. De ijzige provincie Skyrim wordt g...",
            "longDescription" => "The Elder Scroll V: Skyrim is het nieuwste deel in de veelgeprezen Elder Scroll-reeks. Met een complete nieuwe grafische engine, verbeterde actie en een prachtige spelwereld tilt The Elder Scroll V: Skyrim de rollenspel-serie naar een hoger niveau!<br /><br />The Elder Scroll V: Skyrim speelt zich af in de ijskoude provincie Skyrim in het magische land Tamriel. Skyrim, ook wel bekend als 'de keel', leent haar bijnaam aan het feit dat het boven het 'hartland' Cyrodiil ligt. De ijzige provincie Skyrim wordt grotendeels bewoond door het agressieve ras 'The Nords'. Deze, op Vikingen-gebaseerde, strijders waren ook al in eerdere delen van de Elder Scrolls-serie te aanschouwen.<br /><br />Het verhaal van The Elder Scroll V: Skyrim is nauw verbonden met eeuwenoude draken. De dragonborn hadden als taak het kwaad voor altijd weg te houden uit Skyrim. Maar nu heeft de zwarte draken zich tegen hun broeders gekeerd, en zij hebben een honger naar macht. Dit alles gaat ten koste van de rest van de wereld!<br /><br />De rollenspel wordt gespeeld vanuit de eerste persoon, vanuit de ogen van het personage. Voor het eerst kan de camera ook naar achteren worden verplaatst, waardoor je tegen de rug van je held aankijkt.<br /><br />De wereld van Skyrim wordt gekenmerkt door openheid. Spelers zijn vrij opdrachten aan te nemen, allianties te vormen met bepaalde rassen en daar vervolgens de consequenties van te ondergaan. Zo heb je in dit rollenspel de mogelijkheid, en soms is het geen keuze wanneer je wordt aangevallen, een vampier te worden. Overdag reizen en door de zon lopen, is dan geen optie meer. Elke actie kent een reactie, en soms is het resultaat van grote invloed op jouw spel.<br /><br />Jij, geboren uit de draken, moet je naam waar maken!",
            "offerData" => [
                "offers" => [
                    ["price" => 19.90]
                ]
            ],
            "urls" => [
                ["key" => "DESKTOP", "value" => "https://www.bol.com/nl/p/the-elder-scrolls-v-skyrim/1004004011187773/"],
                ["key" => "MOBILE", "value" => "https://m.bol.com/nl/p/the-elder-scrolls-v-skyrim/1004004011187773/"]
            ],
            "images" => [
                ["type" => "IMAGE", "key" => "XS", "url" => "http://s.s-bol.com/imgbase0/imagebase/mini/FC/3/7/7/7/1004004011187773.jpg"]
            ]
        ];
        self::$product = new Product($product_data);
    }

    public function testEntityType()
    {
        $this->assertInstanceOf('openapi\entities\Product', self::$product);
    }

    public function testGetId()
    {
        $this->assertEquals('1004004011187773', self::$product->getId());
    }

    public function testGetTitle()
    {
        $this->assertEquals('The Elder Scrolls V: Skyrim', self::$product->getTitle());
    }
}