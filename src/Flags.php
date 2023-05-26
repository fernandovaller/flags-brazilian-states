<?php

namespace FVCode\FlagsBrazilianStates;

class Flags
{
    private static $flagsData;

    private static function load(): array
    {
        if (self::$flagsData === null) {
            $fileName = __DIR__ . '/../resources/states.json';
            $flagsJson = file_get_contents($fileName);
            self::$flagsData = json_decode($flagsJson, true);
        }

        return self::$flagsData;
    }

    /**
     * Retorna a imagem da bandeira do estado
     */
    public static function uf(string $uf): ?string
    {
        $flags = self::load();

        $normalizedUf = strtoupper($uf);

        return $flags[$normalizedUf]['flag'] ?? null;
    }

    /**
     * Retorna informações sobre um estado [id, stage, capital, flag]
     */
    public static function UfInfo(string $uf): ?array
    {
        $flags = self::load();

        $normalizedUf = strtoupper($uf);

        return $flags[$normalizedUf] ?? null;
    }

    public static function img(string $uf, int $width = 18): string
    {
        $ufInfo = self::ufInfo($uf);

        $flagUrl = $ufInfo['flag'] ?? '';
        $stage = $ufInfo['stage'] ?? '';

        return sprintf('<img src="%s" title="%s" width="%d"/>', $flagUrl, $stage, $width);
    }
}
