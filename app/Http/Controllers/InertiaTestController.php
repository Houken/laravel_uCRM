<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    public function index()
    {
        return Inertia::render("Inertia/Index", [
            'blogs' => InertiaTest::all() //コレクション型でモデル経由でデータを取得
        ]);
    }
    public function show($id)
    {
        return Inertia::render("Inertia/Show", [
            "id" => $id,
            'blog' => InertiaTest::findOrFail($id)
        ]);
        // Show.vueに$id(Index.vueから渡されたblog.id)と対応するblogのレコードを渡す
        // web.phpの処理で、URLは/inertia/show/{id}となる
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => ["required", "max:20"],
            "content" => ["required"]
        ]);
        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        return to_route('inertia.index')
            ->with([
                'message' => '登録しました。'
            ]);
        // messageの値を設定して、inertia.indexに移動。
    }

    public function create()
    {
        return Inertia::render('Inertia/Create');
    }

    public function delete($id)
    {
        $blog = InertiaTest::findOrFail($id);
        $blog->delete();

        return to_route('inertia.index')->with([
            'message' => '削除しました。'
        ]);
    }
}
