<?php declare(strict_types=1);

namespace Tests\Unit\Models\Group;

use App\Models\Group\GroupEloquent;
use Tests\Unit\Models\Abstract\AbstractEloquentTestCase;

/**
 * @extends AbstractEloquentTestCase<GroupEloquent>
 */
class GroupEloquentTest extends AbstractEloquentTestCase {

    public function emptyInstance(): GroupEloquent {
        return new GroupEloquent();
    }

    public function createInstance(): GroupEloquent {
        $eloquent = $this->emptyInstance();
        $eloquent->name = 'test';

        return $eloquent;
    }

}
