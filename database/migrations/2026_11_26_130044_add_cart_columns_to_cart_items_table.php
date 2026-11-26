
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $hasSessionId = Schema::hasColumn('cart_items', 'session_id');
        $hasProductName = Schema::hasColumn('cart_items', 'product_name');
        $hasPrice = Schema::hasColumn('cart_items', 'price');
        $hasImage = Schema::hasColumn('cart_items', 'image');
        $hasQuantity = Schema::hasColumn('cart_items', 'quantity');

        Schema::table('cart_items', function (Blueprint $table) use (
            $hasSessionId,
            $hasProductName,
            $hasPrice,
            $hasImage,
            $hasQuantity
        ) {
            if (!$hasSessionId) {
                $table->string('session_id');
            }

            if (!$hasProductName) {
                $table->string('product_name');
            }

            if (!$hasPrice) {
                $table->decimal('price', 10, 2);
            }

            if (!$hasImage) {
                $table->string('image')->nullable();
            }

            if (!$hasQuantity) {
                $table->unsignedInteger('quantity')->default(1);
            }
        });
    }

    public function down(): void
    {
        $columns = [
            'session_id',
            'product_name',
            'price',
            'image',
            'quantity',
        ];

        $existingColumns = array_filter(
            $columns,
            fn ($column) => Schema::hasColumn('cart_items', $column)
        );

        if (!empty($existingColumns)) {
            Schema::table('cart_items', function (Blueprint $table) use ($existingColumns) {
                $table->dropColumn($existingColumns);
            });
        }
    }
};
