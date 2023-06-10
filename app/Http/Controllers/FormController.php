<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Http\Requests\FormingRequest;

class FormController extends Controller
{
    public function submit(FormingRequest $req){

        $contact = new Form();
        $contact->name = $req->input('name');
        $contact->group = $req->input('group');
        $contact->email=$req->input('email');
        $contact->subject=$req->input('subject');
        $contact->message=$req->input('message');
        $contact->save();

        //переадресация
        return redirect()->route('home')->with('success', 'Данные успешно отправлены!');
        // $validation =  $req->validate([
        //                'subject'=>'required|min:5|max:10',
        //                'message'=>'required|min:15|max:200'
        //            ]);

        //dd($req->input('subject'));
       //dd($req);
       // return "It's a good job, babe!";
    }

    public function allData(){
        $candidates = new Form;
        //return view('messages',['data'=>[$candidates->find(2)]]);
        // dd($candidates->all());
        // return view('messages', ['data'=>Form::all()]);
        return view('messages', ['data'=> $candidates->inRandomOrder ()->get()]);

       // return view('messages', ['data'=>[$candidates->inRandomOrder ()->first()]]);
    }

    public function detailMessage($id){
       $candidates = new Form;
       return view('detail_messages',['data'=>$candidates->find($id)]);
    }

    public function updateMessage($id){
        $candidates = new Form;
        return view('update-message', ['data'=>$candidates->find($id)]);
    }

    public function updateMessageSubmit($id, FormingRequest $req){

        $contact = Form::find($id);

        $contact->name = $req->input('name');
        $contact->group = $req->input('group');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();
        //Переадресация на главную страницу после изменения данных
        return redirect()->route('candidates-detail-one', $id)->with('success','Успешно обновлено');
    }

    public function deleteMessage($id){
        Form::find($id)->delete();
        return redirect()->route('candidates-data')->with('success','Успешно удалено');
    }
}
