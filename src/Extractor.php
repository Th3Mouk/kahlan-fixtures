<?php

/*
 * (c) Jérémy Marodon <marodon.jeremy@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Th3Mouk\KahlanFixtures;

use Illuminate\Support\Collection;

class Extractor
{
    private const FILE_PATH = __DIR__.'/../../datas/datas.json';

    protected $json = null;

    /**
     * @var Collection
     */
    protected $collection = null;

    public function getJson()
    {
        if (null === $this->json) {
            $this->json = $this->loadJson(self::FILE_PATH);
        }
        return $this->json;
    }

    public function getJsonCollection(): Collection
    {
        if (null === $this->collection) {
            $this->collection = new Collection($this->getJson());
        }
        return $this->collection;
    }

    public function loadJson(string $path)
    {
        return json_decode(
            file_get_contents($path)
        );
    }
}
