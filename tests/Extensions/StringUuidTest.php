<?php

namespace NorseBlue\StringExtensions\UUID\Tests\Extensions;

use NorseBlue\ScalarObjects\Facades\StringFacade as Str;
use NorseBlue\StringExtensions\UUID\Tests\TestCase;
use Ramsey\Uuid\UuidInterface;

class StringUuidTest extends TestCase
{
    /** @test */
    public function string_uuid()
    {
        $this->assertInstanceOf(UuidInterface::class, Str::uuid());
    }
}
