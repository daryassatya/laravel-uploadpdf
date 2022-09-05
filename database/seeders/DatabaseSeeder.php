<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Dimas Aryasatya',
            'username' => 'Daryas',
            'email' => 'dimasaryasatya@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // User::create([
        //     'name' => 'Daryas',
        //     'email' => 'daryas@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => "Judul pertama",
        //     'slug' => "judul-pertama",
        //     'excerpt' => "Lorem ipsum pertama",
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => "Judul kedua",
        //     'slug' => "judul-kedua",
        //     'excerpt' => "Lorem ipsum kedua",
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => "Judul ketiga",
        //     'slug' => "judul-ketiga",
        //     'excerpt' => "Lorem ipsum ketiga",
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => "Judul keempat",
        //     'slug' => "judul-keempat",
        //     'excerpt' => "Lorem ipsum keempat",
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

    }
}
