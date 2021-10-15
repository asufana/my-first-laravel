<?php declare(strict_types=1);

namespace Tests\Unit\Models\Account;

use App\Models\Account\AccountEloquent;
use Tests\Unit\Models\Abstract\AbstractTestCase;

class AccountEloquentTest extends AbstractTestCase {

    public function testSave(): void {
        $eloquent = new AccountEloquent();
        $eloquent->name = 'test';
        $eloquent->saveEloquent();
        $this->assertTrue(true);
    }

}
