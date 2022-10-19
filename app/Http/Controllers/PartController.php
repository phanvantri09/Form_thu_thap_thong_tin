<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forms;
use App\Models\Part;
use App\Models\Question;
use App\Models\QuestionInPart;
use App\Models\User;
use App\Http\Requests\Form\add;
use App\Http\Requests\Form\update;
use App\Http\Requests\Part\addP;
use App\Http\Requests\Part\updateP;

class PartController extends Controller
{
    public function ListP(){
        $data = Forms::orderBy('id','DESC')->search()->paginate(10);
        return view('part.list', compact('data'));
    }
    public function AddP($id_form){
        $quest = Question::all();
        return view('part.add', compact(['quest','id_form']));
    }
    public function AddPart( Request $re){
        //dd($re->all());
        if(Part::create([
            'id_form'=>$re->id_form,
            'name'=>$re->name
        ]))
        {
            $part = Part::all();
            $count = count($part)-1;
            $id_part = $part[$count]->id;
            foreach($re->id_question as $id_ques){
                // if(QuestionInPart::create([
                //     'id_question'=>$id_ques,
                //     'id_part'=>$id_part,
                //     'rating'=>0
                // ])){
                // }
                $questioninpart = new QuestionInPart;
                $questioninpart->id_question = $id_ques;
                $questioninpart->id_part = $id_part;
                $questioninpart->rating = 0;
                $questioninpart->save();
            }
            return back()->with('success',"Đã thêm thành công, mời bạn ");
        }
    }
    public function EditP(Part  $id){
        return view('part.edit', compact('id'));
    }
    public function EditPart(update $request, Part  $id){
        $id->name = $request->name;
        $id->save();
        return redirect()->route('trangchu')->with('success',"Sửa thành công");
    }
    public function DeleteP(Part $id)
    {   
        $id->delete();
        return redirect()->route('trangchu')->with('success','Đã xóa sản phẩm');   
    }
}
