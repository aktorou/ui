<?php

use Packaged\Ui\Tests\Supporting\TestElement;
use PHPUnit\Framework\TestCase;

class ElementTest extends TestCase
{
  public function testRender()
  {
    for($i = 0; $i < 100; $i++)
    {
      $ele = new TestElement();
      $this->assertStringStartsWith('<b>Hello</b>', $ele->render());
    }
  }
}
