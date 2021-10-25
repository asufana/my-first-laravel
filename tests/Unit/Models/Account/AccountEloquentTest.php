<?php declare(strict_types=1);

namespace Tests\Unit\Models\Account;

use App\Models\Account\AccountEloquent;
use Tests\Unit\Models\Abstract\AbstractEloquentTestCase;

/**
 * @extends AbstractEloquentTestCase<AccountEloquent>
 */
class AccountEloquentTest extends AbstractEloquentTestCase {

    public function emptyInstance(): AccountEloquent {
        return new AccountEloquent();
    }

    public function createInstance(): AccountEloquent {
        $eloquent = $this->emptyInstance();
        $eloquent->name = 'test';

        return $eloquent;
    }

}
