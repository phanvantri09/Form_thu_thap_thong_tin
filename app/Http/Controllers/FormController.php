<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use App\Models\Part;
use App\Models\Question;
use App\Models\Objects;
use App\Models\QuestionInPart;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Form\add;
use App\Http\Requests\Form\update;
use App\Http\Requests\Part\addP;
use App\Http\Requests\Part\updateP;
class FormController extends Controller
{
    public function ListF(){
        $part = Part::all();
        $ob = Objects::all();
        $data = Forms::orderBy('id','DESC')->search()->paginate(10);
        return view('form.list', compact(['data','ob','part']));
    }
    public function AddF(){
        $data = Objects::all();
        return view('form.add', compact(["data"]));
    }
    public function AddForm(add $request){
        // dd($request->all());
        if(Forms::create([
            'name'=>$request->name,
            'id_objects'=>$request->id_objects
        ]))
        {
            return redirect()->route('addForm')->with('success','successfully Add.');
        }
    }
    public function EditF(Forms  $id){
        $data = Objects::all();
        return view('form.edit', compact(['id','data']));
    }
    public function EditForm(update $request, Forms  $id){
        $id->name = $request->name;
        $id->save();
        return redirect()->route('trangchu')->with('success',"Sửa thành công");
    }
    public function DeleteF(Forms $id)
    {   
        $id->delete();
        return redirect()->route('trangchu')->with('success','Đã xóa sản phẩm');   
    }
}
