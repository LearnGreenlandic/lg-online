<?php

/*
The MIT License (MIT)

Copyright (c) 2017 Benoit POLASZEK

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

// Adapted from code at https://github.com/bpolaszek/cartesian-product

namespace LGO;

use Countable;
use InvalidArgumentException;
use IteratorAggregate;
use Traversable;

class CartesianProduct implements IteratorAggregate, Countable
{
    /**
     * @var array
     */
    private $set = [];

    /**
     * @var bool
     */
    private $isRecursiveStep = false;

    /**
     * @var int
     */
    private $count;

    /**
     * CartesianProduct constructor.
     *
     * @param array $set - A multidimensionnal array.
     */
    public function __construct(array $set)
    {
        $this->set = $set;
    }

    /**
     * @return \Traversable
     */
    public function getIterator(): Traversable
    {
        if ([] === $this->set) {
            if (true === $this->isRecursiveStep) {
                yield [];
            }

            return;
        }

        $set = $this->set;
        $keys = \array_keys($set);
        $last = \end($keys);
        $subset = \array_pop($set);
        $this->validate($subset, $last);
        foreach (self::subset($set) as $product) {
            foreach ($subset as $value) {
                yield $product + [$last => ($value instanceof \Closure ? $value($product) : $value)];
            }
        }
    }

    /**
     * @param $subset
     * @param $key
     */
    private function validate($subset, $key)
    {
        // Validate array subset
        if (\is_array($subset) && !empty($subset)) {
            return;
        }

        // Validate iterator subset
        if ($subset instanceof Traversable && $subset instanceof Countable && \count($subset) > 0) {
            return;
        }

        throw new InvalidArgumentException(\sprintf('Key "%s" should return a non-empty iterable', $key));
    }

    /**
     * @param  array $subset
     * @return CartesianProduct
     */
    private static function subset(array $subset)
    {
        $product = new self($subset);
        $product->isRecursiveStep = true;
        return $product;
    }

    /**
     * @return array
     */
    public function asArray()
    {
        return \iterator_to_array($this);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        if (null === $this->count) {
            $this->count = (int) \array_product(
                \array_map(
                    function ($subset, $key) {
                        $this->validate($subset, $key);
                        return \count($subset);
                    },
                    $this->set,
                    \array_keys($this->set)
                )
            );
        }
        return $this->count;
    }
}

/**
 * @param  array $set - A multidimensionnal array.
 * @return CartesianProduct
 */
function cartesian_product(array $set)
{
    return new CartesianProduct($set);
}
