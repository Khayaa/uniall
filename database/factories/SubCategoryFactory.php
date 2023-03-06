<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $category = Category::factory()->create();
        // $parentSubcategory = SubCategory::factory()->create([
        //     'category_id' => $category->id,
        // ]);
        return [
            'name' => $this->faker->word,
            'category_id' => Category::factory()->create()->id,
            'parent_id' => null,
        ];
    }
}
