<?php

declare(strict_types=1);

namespace Tsubakiyama\PhpPracticePackage;

use PHPUnit\Framework\TestCase;

class PhpPracticePackageTest extends TestCase
{
    /**
     * @var PhpPracticePackage
     */
    protected $phpPracticePackage;

    protected function setUp() : void
    {
        $this->phpPracticePackage = new PhpPracticePackage;
    }

    public function testIsInstanceOfPhpPracticePackage() : void
    {
        $actual = $this->phpPracticePackage;
        $this->assertInstanceOf(PhpPracticePackage::class, $actual);
    }
}
