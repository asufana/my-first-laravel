<?php declare(strict_types=1);

namespace Tests\Unit\Models\Abstract;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

abstract class AbstractTestCase extends TestCase {

    //テストトランザクションの有効化（テストケースごとにロールバックする）
    use DatabaseTransactions;

}
