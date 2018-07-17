<?php

namespace Italomoralesf\Slugify\Tests;

use Italomoralesf\Slugify\Slugify;
use PHPUnit\Framework\TestCase;

class SlugifyTest extends TestCase
{
	/**
     * @var Slugify
     */
    private $slugify;
    private $actual;

    protected function setUp()
    {
        $this->slugify  = new Slugify();

        $this->actual   = 'It is a long established';
    }

    public function testFromStringToSlug()
    {
        $expected = 'it-is-a-long-established';
        
        $this->assertEquals($expected, $this->slugify->render($this->actual));
    }

    public function testDoNotConvertToLowercase()
    {
        $expected = 'It-is-a-long-established';

        $this->slugify = new Slugify(['lowercase' => false]);

        $this->assertEquals($expected, $this->slugify->render($this->actual));
    }

    public function testChangeTheSeparator()
    {
        $expected = 'it-_-is-_-a-_-long-_-established';

        $this->slugify = new Slugify(['separator' => '-_-']);

        $this->assertEquals($expected, $this->slugify->render($this->actual));
    }

    public function testWithoutSpecialCharacters()
    {
    	$this->actual = "Este año Curso de Programación";
    	$expected     = 'este-ao-curso-de-programacin';

        $this->assertEquals($expected, $this->slugify->render($this->actual));
    }

    public function testTestOptionsFromTheRenderMethod()
    {
        $expected = 'It-_-is-_-a-_-long-_-established';

        $this->assertEquals($expected, $this->slugify->render($this->actual, ['separator' => '-_-', 'lowercase' => false]));
    }

}