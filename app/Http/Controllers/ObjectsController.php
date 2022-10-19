<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use App\Models\Part;
use App\Models\Question;
use App\Models\Objects;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Objects\add;
use App\Http\Requests\Objects\update;

class ObjectsController extends Controller
{
    public function List(){
        $data = Objects::orderBy('id','DESC')->search()->paginate(15);
        return view('objects.list', compact('data'));
    }
    public function Add(){
        return view('objects.add');
    }
    public function AddObjects(add $request){
        // dd($request->all());
        if(Objects::create([
            'name'=>$request->name,
        ]))
        {
            return redirect()->route('listObjects')->with('success','successfully Add.');
        }
    }
    public function Edit(Objects  $id){
        return view('objects.edit', compact('id'));
    }
    public function EditObjects(update $request, Objects  $id){
        $id->name = $request->name;
        $id->save();
        return redirect()->route('listObjects')->with('success',"Sửa thành công");
    }
    public function Delete(Objects $id)
    {   
        $id->delete();
        return redirect()->route('trangchu')->with('success','Đã xóa sản phẩm');   
    }
}
