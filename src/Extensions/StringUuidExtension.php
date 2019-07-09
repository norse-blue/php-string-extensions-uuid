<?php

declare(strict_types=1);

namespace NorseBlue\StringExtensions\UUID\Extensions;

use NorseBlue\ExtensibleObjects\Contracts\ExtensionMethod;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class StringUuidExtension implements ExtensionMethod
{
    /**
     * @return callable(): UuidInterface
     */
    public function __invoke(): callable
    {
        /**
         * Generate a UUID (version 4).
         *
         * @return \Ramsey\Uuid\UuidInterface
         *
         * @throws \Exception
         */
        return static function (): UuidInterface {
            return Uuid::uuid4();
        };
    }
}
