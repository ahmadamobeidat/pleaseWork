<?php

namespace DevLabs\Newscrud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DevLabs\Newscrud\News;

class NewsAdminBackendController  extends Controller
{
    public function index()
    {
        return redirect()->route('news.create');
    }

    public function create()
    {
        $news = News::all();
        $submit = 'Add';
        return view('devlabs.newscrud.list', compact('news', 'submit'));
    }

    public function store()
    {
        $input = Request::all();
        News::create($input);
        return redirect()->route('news.create');
    }

    public function edit($id)
    {
        $news = News::all();
        $new = $news->find($id);
        $submit = 'Update';
        return view('devlabs.newscrud.list', compact('news', 'new', 'submit'));
    }

    public function update($id)
    {
        $input = Request::all();
        $news = News::findOrFail($id);
        $news->update($input);
        return redirect()->route('news.create');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('news.create');
    }
}
