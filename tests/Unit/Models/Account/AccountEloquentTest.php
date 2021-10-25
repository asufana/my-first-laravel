<?php declare(strict_types=1);

namespace Tests\Unit\Models\Account;

use App\Models\Account\AccountEloquent;
use App\Models\Abstract\AbstractEloquent;
use Tests\Unit\Models\Abstract\AbstractEloquentTestCase;

class AccountEloquentTest extends AbstractEloquentTestCase {

    public function emptyInstance(): AbstractEloquent {
        return new AccountEloquent();
    }

    public function createInstance(): AbstractEloquent {
        $eloquent = $this->emptyInstance();
        $eloquent->name = 'test';

        return $eloquent;
    }

}
