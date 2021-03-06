<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =[];
        $cName = 'Без категории';
        $categories[] = [
          'title'  => $cName,
          'slug' => Str::slug($cName,'-'),
          'parent_id' => 0,
          'published' => 1,
        ];
        for ($i = 1; $i <= 10; $i++){
            $cName = 'Категория №'.$i;
            $parentId = ($i > 4) ? rand(1,4) : 1;

            $categories[] = [
                'title'  => $cName,
                'slug' => Str::slug($cName,'-'),
                'parent_id' => $parentId,
                'published' => 1,
            ];

        }
        DB::table('categories')->insert($categories);

    }
}
