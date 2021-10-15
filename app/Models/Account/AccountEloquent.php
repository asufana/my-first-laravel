<?php declare(strict_types=1);

namespace App\Models\Account;

use App\Models\Abstract\AbstractEloquent;

/**
 * @property string name
 */
class AccountEloquent extends AbstractEloquent {
    //Laravelへテーブル名指示
    public const TABLE_NAME = 'accounts';
    protected $table = self::TABLE_NAME;


}
