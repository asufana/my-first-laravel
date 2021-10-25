<?php declare(strict_types=1);

use App\Models\Abstract\AbstractMigration;
use App\Models\Group\GroupEloquent;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GroupMigration extends AbstractMigration
{
    public function up(): void {
        Schema::create(GroupEloquent::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('memo', 255)->nullable();
            $table->timestamps();
        });
    }
}
