<?php

namespace FVCode\FlagsBrazilianStates;

class Flags
{
    private static function load(): array
    {
        $fileName = \dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'states.json';

        return \json_decode(
            file_get_contents($fileName),
            true
        );
    }

    /**
     * Retorna a imagem da bandeira do estado
     *
     */
    public static function uf(string $uf): ?string
    {
        return self::load()[\strtoupper($uf)]['flag'] ?? null;
    }

    /**
     * Retorna informações sobre um estado [id, stage, capital, flag]
     *
     */
    public static function ufInfo(string $uf): ?array
    {
        return self::load()[\strtoupper($uf)] ?? null;
    }

    public static function img(string $uf, int $width = 18): string
    {
        $info = self::ufInfo($uf);

        return sprintf('<img src="%s" title="%s" width="%d"/>', $info['flag'], $info['stage'], $width);
    }
}
