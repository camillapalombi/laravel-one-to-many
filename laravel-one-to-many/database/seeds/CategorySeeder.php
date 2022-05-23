<?php

use Illuminate\Database\Seeder;
use App\Category;

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

            [
                'name' => 'Cronaca',
                'description' => 'Hola maiores dolore molestiae facere natus voluptatibus amet! Ipsa, qui pariatur.',
            ],
            [
                'name' => 'Cultura',
                'description' => 'Sit amet consectetur adipisicing elit. In iste, nulla enim laudantium rerum error voluptatem quo eius eaque qui sit amet consectetur adipisicing elit. In iste, nulla enim laudantium rerum error voluptatem quo eius eaque qui Lorem ipsum dolor sit amet consectetur adipisicing elit. In iste, nulla enim laudantium rerum error voluptatem quo eius eaque qui maiores dolore molestiae facere natus voluptatibus amet! Ipsa, qui pariatur.',
            ],
            [
                'name' => 'Tecnologia',
                'description' => 'Ipsum dolor sit amet consectetur adipisicing elit. In iste, nulla enim laudan dolore molestiae facere natus voluptatibus amet! Ipsa, qui pariatur.',
            ],
            [
                'name' => 'Economia',
                'description' => 'Lorem ipsum dolor uo eius eaque qui maiores dolore molestiae facere natus voluptatibus amet! Ipsa, qui pariatur.',
            ],
            [
                'name' => 'Curiosità',
                'description' => 'Dolor sit amet consectetur adipisicing elit. In iste, nulla enim laudantium rerum error voluptatem quo eius eaque qui maiores dolore molestiae facere natus voluptatibus amet! Ipsa, qui pariatur.',
            ],
            [
                'name' => 'Viaggi',
                'description' => 'Amet consectetur adipisicing elit. In iste, nulla enim laudantium rerum error voluptatem quo eius eaque qui maiores dolore molestiae facere natus voluptatibus amet! Ipsa, qui pariatur.',
            ],
            [
                'name' => 'Cucina',
                'description' => 'Lorem ipsu In iste, nulla enim laudantium rerum error voluptatem quo eius eaque qui maiores dolore molestiae facere natus voluptatibus amet! Ipsa, qui pariatur.',
            ],

        ];


        foreach ($categories as $category) {

            Category::create($category);
        }
        
    }
}
