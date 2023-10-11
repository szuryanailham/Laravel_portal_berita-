<?php

namespace App\Models;



class post 
{
  private  static  $blog_post =[ 
    [
        "title" => "Judul Post Pertama",
        "slug"=>"judul-post-pertama",
        "author"=> "Ilham Suryana",
        "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem recusandae animi iusto a nostrum eveniet id, earum facere ullam repellat veniam ex iste minima velit, nulla ea saepe atque doloribus labore sequi quidem dolore. A exercitationem sint dicta pariatur ullam maiores dignissimos. Eligendi cumque sequi, aspernatur error facilis magnam velit quaerat at consequuntur dicta placeat sed nam dolorum, delectus molestias! Fugit, quos voluptatem fuga inventore eveniet qui ex iure aliquam sapiente blanditiis vero dolorem ducimus consequatur corrupti vel ipsum aperiam!"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug"=>"judul-post-kedua",
        "author"=> "Dody ",
        "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae accusamus nostrum sequi laboriosam illum at, accusantium eius officia qui nam aut cumque culpa, necessitatibus corrupti dolor ab? Sed ipsum reiciendis neque quod ab laudantium illo quidem optio dolor pariatur tempore recusandae, mollitia iusto fuga esse vitae deserunt! Expedita vitae animi delectus nemo porro nisi, amet sint voluptates assumenda optio commodi facere esse quisquam dignissimos itaque earum. Magni debitis fuga ipsum, laboriosam at mollitia porro alias ab corporis, eveniet rem nihil recusandae, numquam fugiat illo. Velit accusamus voluptatum sed! Asperiores dolorem facilis alias vel dolore enim voluptates nemo placeat quam error."
    ],
];

public static function all(){
    return collect(self::$blog_post);
}

public static function find($slug){
    $posts = static::all();

    return $posts->firstWhere('slug',$slug);
}
};


