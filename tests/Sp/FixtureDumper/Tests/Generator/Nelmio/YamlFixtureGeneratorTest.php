<?php

namespace Sp\FixtureDumper\Tests\Generator\Nelmio;

use Sp\FixtureDumper\Generator\DefaultNamingStrategy;
use Sp\FixtureDumper\Tests\Generator\AbstractGeneratorTest;
use Sp\FixtureDumper\Generator\Nelmio\YamlFixtureGenerator;

/**
 * @author Martin Parsiegla <martin.parsiegla@gmail.com>
 */
class YamlFixtureGeneratorTest extends AbstractGeneratorTest
{
    /**
     * @return \Sp\FixtureDumper\Generator\AbstractGenerator
     */
    protected function loadGenerator()
    {
        $generator = new YamlFixtureGenerator($this->manager, new DefaultNamingStrategy());

        return $generator;
    }

    /**
     * @return string
     */
    protected function getFormat()
    {
        return 'yml';
    }
}