<?php

namespace App\Models;

class Post{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Tiara Firdausa",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, in a? Non ex eligendi repudiandae, quas molestias beatae, consequatur, veritatis minima modi atque pariatur totam eaque! Sapiente perspiciatis minus et nostrum corporis impedit nemo molestiae, soluta quos fugit alias mollitia, sunt corrupti voluptatum quam ea id? Natus cumque illo inventore, perferendis tempore culpa ex, blanditiis unde repudiandae placeat sunt. Sequi facilis, exercitationem laudantium doloremque earum ut! Minima quibusdam aliquam eum et quis aliquid eligendi corrupti, quos saepe laudantium iure deserunt?"
        ],
    
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Rahmalia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe inventore provident optio earum porro, perferendis, deserunt dolor vitae adipisci perspiciatis consequuntur! Ut similique, sunt eligendi blanditiis ipsam dicta cumque corporis nesciunt consequatur soluta in voluptatibus voluptas numquam impedit delectus, maxime asperiores illo aliquid fuga quidem nostrum reiciendis sequi accusamus molestias! Quae cum nemo impedit reprehenderit doloremque rem reiciendis consequuntur, fuga et pariatur minus doloribus quas repudiandae dolorem vel. Omnis harum tempora praesentium ducimus esse? Labore, reiciendis pariatur. Iste id nemo quos repellat pariatur, ad consectetur amet dolorum quo voluptas cupiditate sapiente provident. Saepe beatae fugit, culpa laboriosam et nemo provident?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}

?>