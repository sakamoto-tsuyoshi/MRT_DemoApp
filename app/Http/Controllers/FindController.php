<?php
namespace App\Http\Controllers;
use App\Find;
use App\Nickname;
use Illuminate\Http\Request;
class FindController extends Controller
{   //findページ
    public function find()
    {
        return view('find');
    }


    //findresultページ
    public function findresult()
    {
        $query = Find::all();
        return view('findresult',compact('query'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $query)
    {
        // 登録処理
        $value = new Find();
        $form = $query->all();
        unset($form['_token']);
        $value->fill($form)->save();
        $query = Find::all()->first();
        return view('store', compact('query'));
    }


    //レコードの削除
    public function destroy(Request $id) {
        $query =  Find::where('id',$id->input('id'))->first();

        return view('destroy', compact('query'));
    }


    public function destroyresult(Request $id) {
        $query =  Find::where('id',$id->input('id'))->first();
        $query->delete();

        return view('destroyresult');
    }


    public function renew(Request $request)
    {
        $info = find::where('id', $request->input('id'))->first();
        return view('renew', compact('info'));
    }



    public function renew_result(Request $request)
    {
        $info = find::where('id', $request->input('id'))->first();
        return view('renew', compact('info'));
    }


}

