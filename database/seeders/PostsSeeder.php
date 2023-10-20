<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use PhpParser\Node\Expr\New_;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post;
        $post->title = 'Pemilu 2024';
        $post->slug = 'pemilu-2024';
        $post->excerpt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum delectus ipsum rerum consequuntur
        provident non animi nobis! Perferendis autem reiciendis similique pariatur dolorum ipsum quaerat';
        $post->body = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum delectus ipsum rerum consequuntur
        provident non animi nobis! Perferendis autem reiciendis similique pariatur dolorum ipsum quaerat
        est ab doloribus ratione tempore et eum nostrum provident magnam qui, asperiores quo. Similique
        fugit porro delectus quo architecto incidunt. Totam, ab. Laudantium adipisci deserunt, totam velit,
        ipsam id ullam in impedit consequuntur culpa labore. Quam, eius consequuntur repellendus libero
        maiores error? Eveniet possimus autem, consequatur ratione, praesentium porro velit cupiditate
        beatae, dicta voluptate architecto aut earum magnam nisi voluptatum tempore dolore labore.
        Dolore minus libero laboriosam fuga, consequatur quis.
         Nam expedita mollitia quas cum!';
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();


        $post = new Post;
        $post->title = 'Piala AFF';
        $post->slug = 'piala-aff';
        $post->excerpt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores placeat dolore quidem explicabo culpa alias nesciunt
        magnam itaque nostrum quo? Adipisci odit inventore odio veniam totam qui, similique ut harum eius molestiae. Consequatur,';
        $post->body = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores placeat dolore quidem explicabo culpa alias nesciunt
        magnam itaque nostrum quo? Adipisci odit inventore odio veniam totam qui, similique ut harum eius molestiae. Consequatur, 
        velit deleniti ullam ipsa autem et dolore praesentium eaque eveniet ducimus in, obcaecati eum accusantium aliquam porro
         quidem iusto animi doloremque nobis. Explicabo alias quasi porro quidem asperiores maiores odit ad, doloribus beatae q
         uisquam rerum recusandae. Placeat voluptatum laborum amet eius. Ex dolorem nesciunt voluptatum quam sequi dolores!
          Dolores, magni voluptatum quidem asperiores, dicta cumque accusantium repellendus repellat sint repudiandae 
          labore quae. Animi natus saepe sit similique, optio iste sequi, et facere, adipisci aspernatur quasi ad 
          blanditiis voluptate labore debitis excepturi officia qui corrupti autem necessitatibus vero enim atque. 
          Quisquam corporis mollitia porro natus veritatis atque molestiae ea non dolor eius eum quos laborum recusanda
        commodi praesentium explicabo optio, doloremque blanditiis doloribus aliquam necessitatibus. Et, asperiores debitis?';
        $post->category_id = 2;
        $post->user_id = 1;
        $post->save();


        $post = new Post;
        $post->title = 'Sidang Penangkapan Agus';
        $post->slug = 'Sidang-penagkapan-agus';
        $post->excerpt = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit autem tempore dolorum nesciunt, provident,
        blanditiis veniam ut illo ipsum incidunt error voluptatem nisi numquam. Nostrum aliquid cumque voluptate saepe.';
        $post->body = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit autem tempore dolorum nesciunt, provident,
        blanditiis veniam ut illo ipsum incidunt error voluptatem nisi numquam. Nostrum aliquid cumque voluptate saepe.
        Quas voluptas sequi excepturi voluptates cupiditate non dolorum itaque reprehenderit officia tenetur suscipit
        inventore minima ut maxime quo illum ratione hic aliquam corporis recusandae natus doloremque, deserunt
        laboriosam? Minus, magnam necessitatibus architecto aliquam quo similique iusto, atque praesentium molestias
        expedita deleniti illo rerum, odit porro facilis voluptate reiciendis nihil at! Inventore, laboriosam
        Necessitatibus, dolorem! Assumenda voluptatibus voluptas laboriosam laudantium veniam recusandae,
        est dolorem molestias officiis accusantium voluptatum expedita totam, earum soluta magni aliquam labore?
        Fugit, pariatur culpa similique voluptatem inventore obcaecati dignissimos, veritatis adipisci non vitae
        rem, mollitia nam porro reiciendis laboriosam beatae. Repudiandae voluptatibus dolor maxime aliquam 
        vitae minus laudantium quas corrupti sit vero possimus quae dignissimos sint enim totam debitis,
        eveniet aut harum accusamus modi eos? Recusandae est perspiciatis sapiente cum! Rem a obcaecati
        neque cum repudiandae sequi voluptates sed. Distinctio, in. Exercitationem aut tempora dignissimos
        delectus laudantium iure recusandae neque. Obcaecati dolores nihil, itaque animi minus facere aliquid
        culpa velit quidem soluta! Dolor quibusdam excepturi quo? Sapiente, quod hic amet aliquam autem est
        repellendus soluta eveniet illo debitis.';
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();
    }
}
