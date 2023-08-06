<?php

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase {
    function testRegex()
    {
        $path = '/produk/123/category/instagramfollowers';

        $pattern = "#^/produk/([0-9]*)/category/([a-zA-Z]*)$#";

        $result = preg_match($pattern, $path, $variables);

        self::assertEquals(true, $result);

        var_dump($variables);
        
        array_shift($variables);
        var_dump($variables);
    }
}