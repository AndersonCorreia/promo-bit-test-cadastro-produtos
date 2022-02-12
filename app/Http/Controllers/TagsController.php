<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index()
    {
        return view('tag.tags_list', [
            'tags' => tag::all()
        ]);
    }

    public function relatorio()
    {
        return view('tag.tags_relatorio', [
            'tags' => tag::all()
        ]);
    }

    public function getCreate(){
        return view('tag.tag_create');
    }

    public function postCreate(Request $request){
        $data = $request->all();
        try{
            $tag = new tag();
            $tag->name = $data['name'];
            $tag->save();
        }
        catch(\Exception $e){
            return redirect()->route('tags.create')->with('error', "Erro ao cadastrar tag (tag já cadastrada)");
        }

        return redirect()->route('tags.index');
    }

    public function show(Tag $tag)
    {   
        return view('tag.tag_show', [
            'tag' => $tag,
        ]);
    }

    public function getEdit(Tag $tag)
    {
        return view('tag.tag_edit', [
            'tag' => $tag
        ]);
    }

    public function postEdit(Tag $tag)
    {
        $data = request()->all();
        $tag->name = $data['name'];
        $tag->save();
        return redirect()->route('tags.index');
    }

    public function getDestroy(Tag $tag)
    {
        return view('tag.tag_destroy', [
            'tag' => $tag
        ]);
    }

    public function deleteDestroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index');
    }
}
