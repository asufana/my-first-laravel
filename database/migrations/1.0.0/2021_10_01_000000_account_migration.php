<?php declare(strict_types=1);

use App\Models\Abstract\AbstractMigration;
use App\Models\Account\AccountEloquent;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccountMigration extends AbstractMigration
{
    public function up(): void {
        Schema::create(AccountEloquent::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('memo', 255)->nullable();
            $table->timestamps();
        });
    }
}
