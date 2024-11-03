<?php

declare(strict_types=1);

namespace PHPAbles\Json;

use JsonSerializable;

interface JsonSerializableInterface extends JsonSerializable
{
    public function jsonSerialize(): mixed;
}
