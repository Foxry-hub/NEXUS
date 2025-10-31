<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Dummy data untuk karya seni (nanti bisa diambil dari database)
        $artworks = [
            [
                'id' => 1,
                'image' => 'https://picsum.photos/400/600?random=1',
                'title' => 'Abstract Sunset',
                'artist' => 'John Doe',
                'artist_avatar' => 'https://ui-avatars.com/api/?name=John+Doe&background=6366F1&color=fff',
            ],
            [
                'id' => 2,
                'image' => 'https://picsum.photos/400/500?random=2',
                'title' => 'Digital Portrait',
                'artist' => 'Jane Smith',
                'artist_avatar' => 'https://ui-avatars.com/api/?name=Jane+Smith&background=6366F1&color=fff',
            ],
            [
                'id' => 3,
                'image' => 'https://picsum.photos/400/700?random=3',
                'title' => 'Nature Landscape',
                'artist' => 'Mike Johnson',
                'artist_avatar' => 'https://ui-avatars.com/api/?name=Mike+Johnson&background=6366F1&color=fff',
            ],
            [
                'id' => 4,
                'image' => 'https://picsum.photos/400/550?random=4',
                'title' => 'Modern Architecture',
                'artist' => 'Sarah Wilson',
                'artist_avatar' => 'https://ui-avatars.com/api/?name=Sarah+Wilson&background=6366F1&color=fff',
            ],
            [
                'id' => 5,
                'image' => 'https://picsum.photos/400/650?random=5',
                'title' => 'Character Design',
                'artist' => 'David Lee',
                'artist_avatar' => 'https://ui-avatars.com/api/?name=David+Lee&background=6366F1&color=fff',
            ],
            [
                'id' => 6,
                'image' => 'https://picsum.photos/400/600?random=6',
                'title' => 'Fantasy Illustration',
                'artist' => 'Emily Brown',
                'artist_avatar' => 'https://ui-avatars.com/api/?name=Emily+Brown&background=6366F1&color=fff',
            ],
        ];

        return view('admin.dashboard', compact('artworks'));
    }
}
