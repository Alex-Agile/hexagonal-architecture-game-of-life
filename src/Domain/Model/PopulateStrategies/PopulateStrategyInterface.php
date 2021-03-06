<?php
declare(strict_types=1);

namespace Domain\Model\PopulateStrategies;

use Domain\Model\Cell;

interface PopulateStrategyInterface
{
    /**
     * Returns a grid array of Cells populated using some population strategy
     *
     * @param Cell[] $boardGrid
     *
     * @return Cell[]
     */
    public function populate(array $boardGrid): array;
}
