<?php

declare(strict_types=1);

namespace Changelog\Version;

interface Parser
{
    public function getMajor(): int;

    public function getMinor(): int;

    public function getPatch(): int;

    public function getStability(): ?string;
}
