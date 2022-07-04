<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Str;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $categories = [
      'Gi & Uniform' => ['Gi Akido', 'Gi Jiu Jitsu & BJJ'],
      'Martial Art Gym Supplies' => ['Octagon MMA Cage', 'Round MMA Cage']
    ];

    foreach ($categories as $category => $subcategories)
    {
      $insert = Category::create([
        'category' => $category,
        'slug' => Str::slug($category),
      ]);

      foreach ($subcategories as $subcategory)
      {
        $insert->subcategories()->create([
          'subcategory' => $subcategory,
          'slug' => Str::slug($subcategory)
        ]);
      }
    }
  }
}
