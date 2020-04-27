<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        DB::table('comments')->insert([
            'blogpost_id' => 1,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'author' => 'Anne Welch',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        DB::table('comments')->insert([
            'blogpost_id' => 1,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'author' => 'Shanny Howe',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        DB::table('comments')->insert([
            'blogpost_id' => 2,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'author' => 'Darrick Towne',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        DB::table('comments')->insert([
            'blogpost_id' => 3,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'author' => 'Paolo Ankunding',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        DB::table('comments')->insert([
            'blogpost_id' => 3,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'author' => 'Chelsie Gottlieb',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        DB::table('comments')->insert([
            'blogpost_id' => 5,
            'content' => '<p>Quod aspernatur sunt cum qui aut. Animi et explicabo ea.</p><p>Cupiditate id eum eum in ab. Id sint quidem nostrum. Similique labore doloribus eos at.</p><p>Officiis non rem ea quia ut. Quis quaerat itaque voluptatem a impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'author' => 'Alanna Moen',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        DB::table('comments')->insert([
            'blogpost_id' => 5,
            'content' => '<p>Voluptatum repudiandae sequi iusto eum ut impedit et. Quam sit et voluptates quia inventore inventore. Illo quis totam molestiae ut.</p><p>Labore quibusdam quia modi facilis vel quia impedit voluptas. Id molestias molestias sint enim possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'author' => 'Blanche Harris',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        $randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        DB::table('comments')->insert([
            'blogpost_id' => 6,
            'content' => '<p>Quod aspernatur sunt cum qui aut. Animi et explicabo ea.</p><p>Cupiditate id eum eum in ab. Id sint quidem nostrum. Similique labore doloribus eos at.</p><p>Officiis non rem ea quia ut. Quis quaerat itaque voluptatem possimus autem.</p><p>Nemo et quam tempora. Similique aspernatur blanditiis sed adipisci quis eligendi. Id est minima excepturi et quae iste. Accusamus soluta iste vel soluta.</p><p>Itaque ut culpa nostrum nihil cupiditate illo beatae et. Modi dignissimos dolorum fugit sint.</p>',
            'author' => 'Dr. Jaiden Legros',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
    }
}
