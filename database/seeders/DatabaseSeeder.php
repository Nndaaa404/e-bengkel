<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Ananda Rizky Maulana',
        //     'email' => 'anandaarizkymaulana@gmail.com',
        //     'password' => bcrypt('admin')
        // ]);

        // User::create([
        //     'name' => 'Nndaaa',
        //     'email' => '9danandarizkymaulana@gmail.com',
        //     'password' => bcrypt('admin')
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, similique. Rerum minus porro eveniet nam amet omnis soluta quaerat, itaque nulla nemo.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, similique. Rerum minus porro eveniet nam amet omnis soluta quaerat, itaque nulla nemo. Quia excepturi quis mollitia atque fugiat fugit assumenda, dolores quos, consectetur, commodi quae. </p><p>Dolorum deserunt enim dolor eaque illo laboriosam nobis, accusantium dolorem eos repellendus, cupiditate, reiciendis eum praesentium modi aliquam. Temporibus ipsam deleniti neque natus! Ipsum, error. Id, at similique ad officia quisquam voluptatibus et amet cum quasi commodi fugiat excepturi qui dolor quaerat magnam accusamus consequatur. Officia, cumque ratione in nulla nesciunt, consectetur excepturi aut natus incidunt eligendi aperiam, delectus hic nisi.</p><p>Sed earum ad, ut amet cum aut laborum rerum. Provident consequuntur dolorem at sunt eaque? Cupiditate, eligendi autem odio ipsam eaque magnam mollitia officiis quam dolores quidem voluptatibus laudantium explicabo, ipsum sint, tempore delectus. Nisi tenetur animi illo sed fugiat tempora vel dolor ipsum quisquam, eveniet iste necessitatibus ad labore maxime temporibus eligendi aperiam mollitia corporis, autem fuga cupiditate. Dolore quibusdam libero quidem officiis animi illum, dignissimos consectetur fugit qui cumque officia. Voluptatem, explicabo reiciendis? Fugit corporis soluta minima dolores repellendus, hic quisquam deleniti, ex voluptatem temporibus at iste magnam eius iure porro rem laudantium vitae excepturi expedita eos. Iusto officia pariatur laborum magni?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, similique. Rerum minus porro eveniet nam amet omnis soluta quaerat, itaque nulla nemo.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, similique. Rerum minus porro eveniet nam amet omnis soluta quaerat, itaque nulla nemo. Quia excepturi quis mollitia atque fugiat fugit assumenda, dolores quos, consectetur, commodi quae. </p><p>Dolorum deserunt enim dolor eaque illo laboriosam nobis, accusantium dolorem eos repellendus, cupiditate, reiciendis eum praesentium modi aliquam. Temporibus ipsam deleniti neque natus! Ipsum, error. Id, at similique ad officia quisquam voluptatibus et amet cum quasi commodi fugiat excepturi qui dolor quaerat magnam accusamus consequatur. Officia, cumque ratione in nulla nesciunt, consectetur excepturi aut natus incidunt eligendi aperiam, delectus hic nisi.</p><p>Sed earum ad, ut amet cum aut laborum rerum. Provident consequuntur dolorem at sunt eaque? Cupiditate, eligendi autem odio ipsam eaque magnam mollitia officiis quam dolores quidem voluptatibus laudantium explicabo, ipsum sint, tempore delectus. Nisi tenetur animi illo sed fugiat tempora vel dolor ipsum quisquam, eveniet iste necessitatibus ad labore maxime temporibus eligendi aperiam mollitia corporis, autem fuga cupiditate. Dolore quibusdam libero quidem officiis animi illum, dignissimos consectetur fugit qui cumque officia. Voluptatem, explicabo reiciendis? Fugit corporis soluta minima dolores repellendus, hic quisquam deleniti, ex voluptatem temporibus at iste magnam eius iure porro rem laudantium vitae excepturi expedita eos. Iusto officia pariatur laborum magni?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, similique. Rerum minus porro eveniet nam amet omnis soluta quaerat, itaque nulla nemo.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, similique. Rerum minus porro eveniet nam amet omnis soluta quaerat, itaque nulla nemo. Quia excepturi quis mollitia atque fugiat fugit assumenda, dolores quos, consectetur, commodi quae. </p><p>Dolorum deserunt enim dolor eaque illo laboriosam nobis, accusantium dolorem eos repellendus, cupiditate, reiciendis eum praesentium modi aliquam. Temporibus ipsam deleniti neque natus! Ipsum, error. Id, at similique ad officia quisquam voluptatibus et amet cum quasi commodi fugiat excepturi qui dolor quaerat magnam accusamus consequatur. Officia, cumque ratione in nulla nesciunt, consectetur excepturi aut natus incidunt eligendi aperiam, delectus hic nisi.</p><p>Sed earum ad, ut amet cum aut laborum rerum. Provident consequuntur dolorem at sunt eaque? Cupiditate, eligendi autem odio ipsam eaque magnam mollitia officiis quam dolores quidem voluptatibus laudantium explicabo, ipsum sint, tempore delectus. Nisi tenetur animi illo sed fugiat tempora vel dolor ipsum quisquam, eveniet iste necessitatibus ad labore maxime temporibus eligendi aperiam mollitia corporis, autem fuga cupiditate. Dolore quibusdam libero quidem officiis animi illum, dignissimos consectetur fugit qui cumque officia. Voluptatem, explicabo reiciendis? Fugit corporis soluta minima dolores repellendus, hic quisquam deleniti, ex voluptatem temporibus at iste magnam eius iure porro rem laudantium vitae excepturi expedita eos. Iusto officia pariatur laborum magni?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, similique. Rerum minus porro eveniet nam amet omnis soluta quaerat, itaque nulla nemo.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, similique. Rerum minus porro eveniet nam amet omnis soluta quaerat, itaque nulla nemo. Quia excepturi quis mollitia atque fugiat fugit assumenda, dolores quos, consectetur, commodi quae. </p><p>Dolorum deserunt enim dolor eaque illo laboriosam nobis, accusantium dolorem eos repellendus, cupiditate, reiciendis eum praesentium modi aliquam. Temporibus ipsam deleniti neque natus! Ipsum, error. Id, at similique ad officia quisquam voluptatibus et amet cum quasi commodi fugiat excepturi qui dolor quaerat magnam accusamus consequatur. Officia, cumque ratione in nulla nesciunt, consectetur excepturi aut natus incidunt eligendi aperiam, delectus hic nisi.</p><p>Sed earum ad, ut amet cum aut laborum rerum. Provident consequuntur dolorem at sunt eaque? Cupiditate, eligendi autem odio ipsam eaque magnam mollitia officiis quam dolores quidem voluptatibus laudantium explicabo, ipsum sint, tempore delectus. Nisi tenetur animi illo sed fugiat tempora vel dolor ipsum quisquam, eveniet iste necessitatibus ad labore maxime temporibus eligendi aperiam mollitia corporis, autem fuga cupiditate. Dolore quibusdam libero quidem officiis animi illum, dignissimos consectetur fugit qui cumque officia. Voluptatem, explicabo reiciendis? Fugit corporis soluta minima dolores repellendus, hic quisquam deleniti, ex voluptatem temporibus at iste magnam eius iure porro rem laudantium vitae excepturi expedita eos. Iusto officia pariatur laborum magni?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
