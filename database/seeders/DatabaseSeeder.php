<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, neque.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quia exercitationem et commodi possimus vel cupiditate cumque nesciunt aperiam quibusdam? Modi unde voluptas ullam doloribus quam praesentium deleniti labore. Delectus, exercitationem debitis! Reiciendis, suscipit cumque. Laborum saepe a distinctio autem porro quasi optio rem fugit aperiam, impedit nemo cupiditate maiores totam reiciendis delectus veritatis nisi, ullam quod. Possimus natus quas quasi facilis ea at ab? Corporis ipsam, obcaecati esse vel earum facere, eius aut doloremque sapiente excepturi quae pariatur vero blanditiis soluta similique! Tenetur nulla eaque, quae explicabo, suscipit doloremque ex a reprehenderit non saepe nihil laboriosam nisi rem hic.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, neque.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quia exercitationem et commodi possimus vel cupiditate cumque nesciunt aperiam quibusdam? Modi unde voluptas ullam doloribus quam praesentium deleniti labore. Delectus, exercitationem debitis! Reiciendis, suscipit cumque. Laborum saepe a distinctio autem porro quasi optio rem fugit aperiam, impedit nemo cupiditate maiores totam reiciendis delectus veritatis nisi, ullam quod. Possimus natus quas quasi facilis ea at ab? Corporis ipsam, obcaecati esse vel earum facere, eius aut doloremque sapiente excepturi quae pariatur vero blanditiis soluta similique! Tenetur nulla eaque, quae explicabo, suscipit doloremque ex a reprehenderit non saepe nihil laboriosam nisi rem hic.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, neque.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quia exercitationem et commodi possimus vel cupiditate cumque nesciunt aperiam quibusdam? Modi unde voluptas ullam doloribus quam praesentium deleniti labore. Delectus, exercitationem debitis! Reiciendis, suscipit cumque. Laborum saepe a distinctio autem porro quasi optio rem fugit aperiam, impedit nemo cupiditate maiores totam reiciendis delectus veritatis nisi, ullam quod. Possimus natus quas quasi facilis ea at ab? Corporis ipsam, obcaecati esse vel earum facere, eius aut doloremque sapiente excepturi quae pariatur vero blanditiis soluta similique! Tenetur nulla eaque, quae explicabo, suscipit doloremque ex a reprehenderit non saepe nihil laboriosam nisi rem hic.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, neque.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quia exercitationem et commodi possimus vel cupiditate cumque nesciunt aperiam quibusdam? Modi unde voluptas ullam doloribus quam praesentium deleniti labore. Delectus, exercitationem debitis! Reiciendis, suscipit cumque. Laborum saepe a distinctio autem porro quasi optio rem fugit aperiam, impedit nemo cupiditate maiores totam reiciendis delectus veritatis nisi, ullam quod. Possimus natus quas quasi facilis ea at ab? Corporis ipsam, obcaecati esse vel earum facere, eius aut doloremque sapiente excepturi quae pariatur vero blanditiis soluta similique! Tenetur nulla eaque, quae explicabo, suscipit doloremque ex a reprehenderit non saepe nihil laboriosam nisi rem hic.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
