<?php

/*
 * This file is part of the PHP Bench package
 *
 * (c) Daniel Leech <daniel@dantleech.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpBench;

class ClassCollection
{
    private $benchmarks;

    public function __construct(array $benchmarks)
    {
        $this->benchmarks = $benchmarks;
    }

    public function getBenchmarks()
    {
        return $this->benchmarks;
    }
}