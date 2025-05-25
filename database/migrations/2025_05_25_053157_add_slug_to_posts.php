<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('title');
        });

        // Preencher os slugs com base nos títulos existentes
        $posts = DB::table('posts')->select('id', 'title')->get();

        foreach ($posts as $post) {
            $baseSlug = Str::slug($post->title);
            $slug = $baseSlug;
            $i = 1;

            // Garante unicidade
            while (DB::table('posts')->where('slug', $slug)->where('id', '!=', $post->id)->exists()) {
                $slug = $baseSlug . '-' . $i++;
            }

            DB::table('posts')
                ->where('id', $post->id)
                ->update(['slug' => $slug]);
        }

        // Agora define a coluna como NOT NULL e UNIQUE
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
