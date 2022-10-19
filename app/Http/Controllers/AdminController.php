<?php

namespace App\Http\Controllers;
use App\Models\Forms;
use App\Models\Objects;
use App\Models\Part;
use App\Models\Rating;
use App\Models\Question;
use App\Models\QuestionInPart;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Form\add;
use App\Http\Requests\Form\update;
use App\Http\Requests\Part\addP;
use App\Http\Requests\Part\updateP;

class AdminController extends Controller
{
    public function Home(){
        $user = User::all();
        $countUser = count($user);
        $question = Question::all();
        $countQuestion = count($question);
        $data = Forms::orderBy('id','DESC')->search()->paginate(10);
        $countForm = count($data);
        $ob = Objects::all();
        $part = Part::all();
        $countObjects = count($ob);
        return view('tongquan', compact(['countUser','countQuestion', 'countForm','countObjects','data','ob','part']));
    }
    public function end(){
        return view('end');
    }
    public function sumform($id){
        $forms = Forms::all();
        $form = $forms->find($id);
        $part = Part::where('id_form','=',$id)->get();
        $question = Question::all();
        $questioninpart= QuestionInPart::all();
        $rating = Rating::all();
        $muc1 =0;
        $muc2 =0;
        $muc3 =0;
        $muc4 =0;
        $muc5 =0;
        $count = 0;
        return view('form.sumform', compact(['form','part','question','questioninpart','rating','muc1','muc2','muc3','muc4','muc5','count']));
    }
    public function Form($id){
        $forms = Forms::all();
        $form = $forms->find($id);
        $part = Part::where('id_form','=',$id)->get();
        $question = Question::all();
        $questioninpart= QuestionInPart::all(); 
        return view('form', compact(['form','part','question','questioninpart']));
    }
    public function postform(Request $request){
        // láy id của n part trong 1 form,
        // trong part có n qu;estion và n questionInPart
        // dd($request->all());
        // $rating = 'rating5';
        // $k = $request->$rating[0];
        // dd($k);
        $questioninpart = QuestionInPart::all();
        $part = Part::where('id_form','=',$request->id_form)->get();
        foreach ($part as $key => $pa) {
            foreach ($questioninpart as $key => $qui) {
                if($qui->id_part == $pa->id){
                    $rating = 'rating'.$qui->id;
                    $value =$request->$rating;
                    foreach ($value as $key => $va) {
                        $ratin = new Rating;
                        $ratin->id_questioninpart = $qui->id;
                        $ratin->rate = $va;
                        $ratin->save();
                    }
                }
            } 
        }
        return view('end');
    }

    public function Login(){
        return view('login');
    }
    //
    // public function ListP(){
    //     $data = Forms::orderBy('id','DESC')->search()->paginate(10);
    //     return view('part.list', compact('data'));
    // }
    // public function AddP(){
    //     return view('part.add');
    // }
    // public function AddPart(add $request){
    //     // dd($request->all());
    //     if(Part::create([
    //         'name'=>$request->name
    //     ]))
    //     {
    //         return redirect()->route('addPart')->with('success','successfully Add.');
    //     }
    // }
    // public function EditP(Part  $id){
    //     return view('part.edit', compact('id'));
    // }
    // public function EditPart(update $request, Part  $id){
    //     $id->name = $request->name;
    //     $id->save();
    //     return redirect()->route('trangchu')->with('success',"Sửa thành công");
    // }
    // public function DeleteP(Part $id)
    // {   
    //     $id->delete();
    //     return redirect()->route('trangchu')->with('success','Đã xóa sản phẩm');   
    // }
    
}
