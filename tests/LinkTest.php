<?php

use BlackIT\SemanticForm\Elements\Button;

class LinkTest extends \PHPUnit\Framework\TestCase
{
    public function testRenderBasicLink()
    {
        $link = new \BlackIT\SemanticForm\Elements\Link('Cancel', 'http://back.test');
        $expected = '<a class="ui button" href="http://back.test">Cancel</a>';
        $result = $link->render();

        $this->assertEquals($expected, $result);
    }
}
