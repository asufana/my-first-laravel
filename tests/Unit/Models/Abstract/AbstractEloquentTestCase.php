<?php declare(strict_types=1);

namespace Tests\Unit\Models\Abstract;

use App\Models\Abstract\AbstractEloquent;

abstract class AbstractEloquentTestCase extends AbstractTestCase {

    /**
     * 空インスタンスの生成
     * @return AbstractEloquent
     */
    abstract public function emptyInstance(): AbstractEloquent;

    /**
     * インスタンスの生成
     * @return AbstractEloquent
     */
    abstract public function createInstance(): AbstractEloquent;

    /**
     * 保存テスト
     */
    public function testSave(): int {
        //インスタンスの取得
        $eloquent = $this->createInstance();
        $count = $eloquent->count();

        //保存処理
        $id = $eloquent->saveEloquent();
        self::assertNotNull($id);

        //レコード件数が１件増加すること
        self::assertEquals($count + 1, $eloquent->count());

        return $id;
    }

    /**
     * 取得テスト
     */
    public function testFind(): void {
        //インスタンスの保存
        $id = $this->testSave();

        //インスタンスの取得
        $eloquent = $this->emptyInstance()->findEloquent($id);

        //取得できること
        $this->assertNotNull($eloquent);
        //IDが一致していること
        $this->assertEquals($id, $eloquent->getId());
    }

}
