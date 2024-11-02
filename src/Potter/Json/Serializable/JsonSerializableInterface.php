<?php

declare(strict_types=1);

namespace Potter\Json\Serializable;

use JsonSerializable;

interface JsonSerializableInterface extends JsonSerializable
{
    public function jsonSerialize(): mixed;
}
