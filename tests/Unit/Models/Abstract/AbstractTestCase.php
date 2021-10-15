<?php declare(strict_types=1);

namespace Tests\Unit\Models\Abstract;

use Tests\TestCase;

abstract class AbstractTestCase extends TestCase {

    /**
     * 保存テスト
     */
    abstract public function testSave(): void;

}
