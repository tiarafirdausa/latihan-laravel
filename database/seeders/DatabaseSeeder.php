<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        User::create([
            'name' => 'Tiara Firdausa',
            'username' => 'tiarafa',
            'email' => 'tiarafa@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Rahmalia Rahadi',
        //     'email' => 'Rahma@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(5)->create();

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

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eaque nostrum corrupti animi inventore deserunt illum, a officia, odio ut eum esse dolores atque laudantium! Vitae tempore id nesciunt quia adipisci. Totam, placeat minus obcaecati accusamus autem dignissimos ratione at laudantium aperiam? Officia inventore, autem nisi culpa nostrum facilis ratione fuga accusantium sit blanditiis delectus consequuntur aperiam aliquam. </p> <p>Provident asperiores neque hic accusamus harum, eum nihil distinctio dicta architecto reprehenderit nobis praesentium ut incidunt? Aut fugiat voluptatem atque nulla ratione quis at, nostrum alias voluptatum, suscipit cumque libero! Laudantium inventore nam enim exercitationem animi eligendi eaque et odio maxime, est consequuntur laboriosam id doloremque illum velit veniam, repellendus voluptate iusto non atque ex quae reprehenderit autem.</p><p>Voluptas tempore similique perferendis deleniti nesciunt enim sint, labore nostrum asperiores dolorem maxime ea porro. Nostrum, natus consequuntur? Eaque aut nesciunt vel! Saepe excepturi ipsum dicta eum magnam sit debitis, aut, voluptate enim accusantium corporis provident ab dolorem dolor consectetur beatae esse culpa quo labore impedit neque? Asperiores aspernatur cumque amet dolor modi quibusdam voluptates minima vitae voluptas! Amet optio iure natus aspernatur.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eaque nostrum corrupti animi inventore deserunt illum, a officia, odio ut eum esse dolores atque laudantium! Vitae tempore id nesciunt quia adipisci. Totam, placeat minus obcaecati accusamus autem dignissimos ratione at laudantium aperiam? Officia inventore, autem nisi culpa nostrum facilis ratione fuga accusantium sit blanditiis delectus consequuntur aperiam aliquam. </p> <p>Provident asperiores neque hic accusamus harum, eum nihil distinctio dicta architecto reprehenderit nobis praesentium ut incidunt? Aut fugiat voluptatem atque nulla ratione quis at, nostrum alias voluptatum, suscipit cumque libero! Laudantium inventore nam enim exercitationem animi eligendi eaque et odio maxime, est consequuntur laboriosam id doloremque illum velit veniam, repellendus voluptate iusto non atque ex quae reprehenderit autem.</p><p>Voluptas tempore similique perferendis deleniti nesciunt enim sint, labore nostrum asperiores dolorem maxime ea porro. Nostrum, natus consequuntur? Eaque aut nesciunt vel! Saepe excepturi ipsum dicta eum magnam sit debitis, aut, voluptate enim accusantium corporis provident ab dolorem dolor consectetur beatae esse culpa quo labore impedit neque? Asperiores aspernatur cumque amet dolor modi quibusdam voluptates minima vitae voluptas! Amet optio iure natus aspernatur.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eaque nostrum corrupti animi inventore deserunt illum, a officia, odio ut eum esse dolores atque laudantium! Vitae tempore id nesciunt quia adipisci. Totam, placeat minus obcaecati accusamus autem dignissimos ratione at laudantium aperiam? Officia inventore, autem nisi culpa nostrum facilis ratione fuga accusantium sit blanditiis delectus consequuntur aperiam aliquam. </p> <p>Provident asperiores neque hic accusamus harum, eum nihil distinctio dicta architecto reprehenderit nobis praesentium ut incidunt? Aut fugiat voluptatem atque nulla ratione quis at, nostrum alias voluptatum, suscipit cumque libero! Laudantium inventore nam enim exercitationem animi eligendi eaque et odio maxime, est consequuntur laboriosam id doloremque illum velit veniam, repellendus voluptate iusto non atque ex quae reprehenderit autem.</p><p>Voluptas tempore similique perferendis deleniti nesciunt enim sint, labore nostrum asperiores dolorem maxime ea porro. Nostrum, natus consequuntur? Eaque aut nesciunt vel! Saepe excepturi ipsum dicta eum magnam sit debitis, aut, voluptate enim accusantium corporis provident ab dolorem dolor consectetur beatae esse culpa quo labore impedit neque? Asperiores aspernatur cumque amet dolor modi quibusdam voluptates minima vitae voluptas! Amet optio iure natus aspernatur.</p>'
        // ]);

        
    }
}
