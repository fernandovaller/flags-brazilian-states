<?php

namespace Unit;

use FVCode\FlagsBrazilianStates\Flags;
use PHPUnit\Framework\TestCase;

class FlagsTest extends TestCase
{
    public function testUfNotFound(): void
    {
        $flag = Flags::uf('');

        $this->assertNull($flag);
    }

    public function testUf(): void
    {
        $flag = Flags::uf('PI');

        $this->assertIsString($flag);
    }

    public function testUfInfoNotFound(): void
    {
        $flag = Flags::ufInfo('');

        $this->assertNull($flag);
    }

    public function testUfInfo(): void
    {
        $flag = Flags::ufInfo('PI');

        $expected = [
            'id' => 'PI',
            'stage' => 'Piauí',
            'capital' => 'Teresina',
            'flag' => 'data:image/webp;base64,UklGRsIAAABXRUJQVlA4TLUAAAAvEwADAO/AKpKsRmQQgx2c84mEHC/f2mAcyVYiXCLgzpXISYkUfN33qY1kK8Elov+aaICY1LP/Pzr/8X1vm0jty+EDQgQfk5CmtW8xgzYtY17GvF33lSt63wdggO//P4B53+f7vv//gA9grMuM1UwoHImE9ijjwEYAECWn2N30/38Kk3tE/xUkCIBgjEHE6UEkDcG3r9sRBUIQl1Ld6XAeui/bem7XcezsZsEAoIEUjYkGv5wCAA==',
        ];

        $this->assertIsArray($flag);
        $this->assertSame($expected, $flag);
    }

    public function testImg()
    {
        $flag = Flags::img('pi', 20);

        $this->assertIsString($flag);
        $this->assertStringContainsString('<img src="data:image/webp;base64,UklG', $flag);
        $this->assertStringEndsWith('title="Piauí" width="20"/>', $flag);
    }
}