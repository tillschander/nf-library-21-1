<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function show(): Response
    {
        $categories = [
            [
                'name' => 'Books',
                'slug' => 'books',
                'description' => 'More than 2000+',
            ],
            [
                'name' => 'Movies',
                'slug' => 'movies',
                'description' => 'New and popular',
            ],
            [
                'name' => 'Audio',
                'slug' => 'audio',
                'description' => 'Your favorite',
            ]
        ];
        $items = [
            [
                "artist" => "Die drei ???",
                "id" => "1529406670",
                "releaseDate" => "2021-01-15",
                "name" => "Folge 208: Kelch des Schicksals",
                "label" => "Sony Music Entertainment Germany GmbH",
                "coverUrl" => "https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/95/df/21/95df2132-063b-5ca1-f2aa-ff0ffa3db80e/886447878392.jpg/200x200bb.png",
            ],
            [
                "artist" => "Joel Coen",
                "releaseDate" => "1996-03-08",
                "name" => "Fargo",
                "coverUrl" => "https://is1-ssl.mzstatic.com/image/thumb/Video/v4/11/6a/bc/116abcd2-e725-0468-d87b-62d9c3aaddb8/1600x2400_Fargo_German.jpg/200x200bb.png",
                "duration" => "1:50"
            ],
            [
                "artist" => "Karin Lindberg",
                "releaseDate" => "2021-03-08",
                "name" => "Frühling auf Schottisch",
                "isbn" => 565416966,
                "coverUrl" => "https://is5-ssl.mzstatic.com/image/thumb/Publication114/v4/1d/41/8f/1d418f47-8921-d60f-e22d-3897ab5493c4/1032645242.jpg/200x200bb.png",
            ],
            [
                "artist" => "Roni Loren",
                "releaseDate" => "2020-09-30",
                "name" => "Unvergesslich",
                "isbn" => 567416074,
                "coverUrl" => "https://is1-ssl.mzstatic.com/image/thumb/Publication113/v4/79/fc/44/79fc445d-5448-b26c-e3bd-c807b8e6f079/9783732588169.jpg/200x200bb.png",
            ],
            [
                "artist" => "Lauren Layne",
                "releaseDate" => "2021-03-01",
                "name" => "Wolfes of Wall Street - Kennedy",
                "isbn" => 629636073,
                "coverUrl" => "https://is4-ssl.mzstatic.com/image/thumb/Publication114/v4/30/b1/18/30b11809-86e8-565b-8af4-6347d57f3ba5/9783736315112.jpg/200x200bb.png",
            ]
        ];

        return $this->render('home/show.html.twig', [
            'categories' => $categories,
            'items' => $items
        ]);
    }
}
