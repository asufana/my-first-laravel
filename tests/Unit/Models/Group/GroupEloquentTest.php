<?php declare(strict_types=1);

namespace Tests\Unit\Models\Group;

use App\Models\Abstract\AbstractEloquent;
use App\Models\Group\GroupEloquent;
use Tests\Unit\Models\Abstract\AbstractEloquentTestCase;

class GroupEloquentTest extends AbstractEloquentTestCase {

    public function emptyInstance(): AbstractEloquent {
        return new GroupEloquent();
    }

    public function createInstance(): AbstractEloquent {
        $eloquent = $this->emptyInstance();
        $eloquent->name = 'test';

        return $eloquent;
    }

}
