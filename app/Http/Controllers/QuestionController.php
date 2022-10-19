<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Http\Requests\Question\add;
use App\Http\Requests\Question\update;

class QuestionController extends Controller
{
    //
    public function List(){
        $data = Question::orderBy('id','DESC')->search()->paginate(15);
        return view('question.list', compact('data'));
    }
    public function Add(){
        return view('question.add');
    }
    public function AddQuestion(add $request){
        // dd($request->all());
        if(Question::create([
            'name'=>$request->name,
            'type'=>$request->type
        ]))
        {
            return redirect()->route('listQuestion')->with('success','successfully Add.');
        }
    }
    public function Edit(Question  $id){
        return view('question.edit', compact('id'));
    }
    public function EditQuestion(update $request, Question  $id){
        $id->name = $request->name;
        $id->type = $request->type;
        $id->save();
        return redirect()->route('listQuestion')->with('success',"Sửa thành công");
    }
    public function Delete(Question $id)
    {   
        $id->delete();
        return redirect()->route('trangchu')->with('success','Đã xóa sản phẩm');   
    }
}
