<?php

use App\Models\Evenement;
use App\Models\Sponsor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('evenement_sponsor', function (Blueprint $table) {
            $table->foreignIdFor(Evenement::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Sponsor::class)->constrained()->cascadeOnDelete();
            $table->primary(['evenement_id', 'sponsor_id']);
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenement_sponsor');
    }
};
