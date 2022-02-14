<?php

declare(strict_types=1);

namespace Changelog\Version;

interface Comparator
{
    public function isMajor(string $version1, string $version2): bool;

    public function isMinor(string $version1, string $version2): bool;

    public function isPatch(string $version1, string $version2): bool;

    public function greaterThan(string $version1, string $version2): bool;

    public function greaterThanOrEqualTo(string $version1, string $version2): bool;

    public function lessThan(string $version1, string $version2): bool;

    public function lessThanOrEqualTo(string $version1, string $version2): bool;

    public function equalTo(string $version1, string $version2): bool;

    public function notEqualTo(string $version1, string $version2): bool;
}
