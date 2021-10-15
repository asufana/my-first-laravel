<?php declare(strict_types=1);

namespace App\Models\Abstract;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractEloquent extends Model {

    /**
     * 保存処理
     */
    public function saveEloquent(): void {
        $this->save();
    }

}
