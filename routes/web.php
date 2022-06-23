<?php

use App\Enums\PostStatus;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome', ['posts' => Post::paginate(5)]);

Route::get('statuses/{status}', function (PostStatus $status) {
    dump($status->color());
});

Route::get('search/{term?}', function ($term = '') {
    // /* Without FULLTEXT */
    // $term = '%'.$term.'%';

    // return Post::where('body', 'LIKE', $term)
    //     ->orWhere('title', 'LIKE', $term)
    //     ->get();

    // /* With FULLTEXT */
    return $term
        ? Post::whereFullText('body', $term)
            ->orWhereFullText('title', $term)
            ->get()
        : Post::all();
});
