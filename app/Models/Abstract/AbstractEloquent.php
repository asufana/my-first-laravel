<?php declare(strict_types=1);

namespace App\Models\Abstract;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @template T
 * @method static orderBy(string $string, string $string1)
 *
 * @property int id
 */
abstract class AbstractEloquent extends Model {

    /**
     * サロゲートキー取得
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * クエリビルダ取得
     */
    public static function getBuilder(): Builder {
        return self::orderBy('id', 'asc');
    }

    /**
     * 取得処理
     * @return T|null
     */
    public function findEloquent(int $id) {
        /** @var T $eloquent */
        /** @noinspection PhpUnnecessaryLocalVariableInspection */
        /** @noinspection OneTimeUseVariablesInspection */
        $eloquent = self::getBuilder()->find($id);
        return $eloquent;
    }

    /**
     * 保存処理
     */
    public function saveEloquent(): int {
        //保存処理
        $this->save();

        //採番されたID値を返却
        return $this->id;
    }

    /**
     * レコード件数
     */
    public function count(): int {
        return $this::all()->count();
    }

}
