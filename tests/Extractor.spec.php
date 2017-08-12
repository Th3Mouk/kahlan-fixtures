<?php

/*
 * (c) Jérémy Marodon <marodon.jeremy@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Th3Mouk\KahlanFixtures\Tests\Extractors;

use Illuminate\Support\Collection;
use Th3Mouk\KahlanFixtures\Extractor;

describe('GameMasterExtractor', function () {
    describe('getJson()', function () {
        it("Should return raw array result", function () {
            $raw = (new Extractor())->getJson();

            expect($raw)->toBeA('array');
            expect(count($raw))->toBeGreaterThan(0);
        });
    });

    describe('getJsonCollection()', function () {
        it("Should return a non empty Illuminate\Collection", function () {
            $collection = (new Extractor())->getJsonCollection();

            expect($collection)->toBeAnInstanceOf(Collection::class);
        });
    });
});
