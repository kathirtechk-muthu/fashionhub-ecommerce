
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $hasSessionId = Schema::hasColumn('orders', 'session_id');
        $hasPaymentMethod = Schema::hasColumn('orders', 'payment_method');

        Schema::table('orders', function (Blueprint $table) use (
            $hasSessionId,
            $hasPaymentMethod
        ) {
            if (!$hasSessionId) {
                $table->string('session_id')->nullable();
            }

            if (!$hasPaymentMethod) {
                $table->string('payment_method')->default('COD');
            }
        });
    }

    public function down(): void
    {
        // Keep existing order data and columns safe.
    }
};
