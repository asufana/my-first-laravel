<?php declare(strict_types=1);

namespace App\Models\Account;

use App\Models\Abstract\AbstractEloquent;

/**
 * @extends AbstractEloquent<AccountEloquent>
 * @property string name
 */
class AccountEloquent extends AbstractEloquent {
    //Laravelへテーブル名指示
    public const TABLE_NAME = 'account';
    protected $table = self::TABLE_NAME;
}
