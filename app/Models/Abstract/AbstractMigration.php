<?php declare(strict_types=1);

namespace App\Models\Abstract;

use Illuminate\Database\Migrations\Migration;

abstract class AbstractMigration extends Migration {

    abstract public function up(): void;
    public function down(): void {}

}
