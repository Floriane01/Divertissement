<?php

use App\Models\User;
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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('theme')->nullable();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('lieu');
            // $table->integer('prix');
            $table->time('heure_debut');
            $table->string('description');
            $table->string('organisateur');
            $table->string('cover')->nullable();
            $table->string('statut')->nullable();
            $table->date('date_limite');
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
