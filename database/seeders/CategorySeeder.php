<?php

namespace Database\Seeders;

use App\Models\blog_category;
use Illuminate\Database\Seeder;

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
            'Agriculture',
            'AR/VR/MR/XR',
            'AI/Machine Learning',
            'B2B',
            'Blockchain',
            'Citizen Services',
            'Drones',
            'FinTech',
            'FMCG',
            'Hardware',
            'Healthcare',
            'Media',
            'Robotics',
            'SaaS',
            'Foodtech',
            'F&B',
            'Education/Edutech',
            'Transportation',
            'Social Welfare & Development',
            'Others',
        ];

        foreach ($categories as $category) {
            $cat = new blog_category;
            $cat->name = $category;
            $cat->save();
        }

    }
}
