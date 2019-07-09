<?php

declare(strict_types=1);

namespace NorseBlue\StringExtensions\UUID\Extensions;

use NorseBlue\ExtensibleObjects\Contracts\ExtensionMethod;
use Ramsey\Uuid\Codec\TimestampFirstCombCodec;
use Ramsey\Uuid\Generator\CombGenerator;
use Ramsey\Uuid\UuidFactory;
use Ramsey\Uuid\UuidInterface;

class StringOrderedUuidExtension implements ExtensionMethod
{
    /**
     * @return callable(): UuidInterface
     */
    public function __invoke(): callable
    {
        /**
         * Generate a time-ordered UUID (version 4).
         *
         * @return \Ramsey\Uuid\UuidInterface
         *
         * @throws \Exception
         */
        return static function (): UuidInterface {
            $factory = new UuidFactory();

            $factory->setRandomGenerator(
                new CombGenerator(
                    $factory->getRandomGenerator(),
                    $factory->getNumberConverter()
                )
            );

            $factory->setCodec(
                new TimestampFirstCombCodec(
                    $factory->getUuidBuilder()
                )
            );

            return $factory->uuid4();
        };
    }
}
