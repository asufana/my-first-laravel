<?php declare(strict_types=1);

namespace App\Models\Group;

use App\Models\Abstract\AbstractEloquent;

/**
 * @extends AbstractEloquent<GroupEloquent>
 * @property string name
 */
class GroupEloquent extends AbstractEloquent {
    //Laravelへテーブル名指示
    public const TABLE_NAME = 'group';
    protected $table = self::TABLE_NAME;
}
