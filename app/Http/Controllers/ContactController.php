<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function contacter()
    {
        return view('contact');

    }
    public function save_contact(Request $request)
    {
        // enregistrement dans bd
        $new_contact = new Contact();
        $new_contact->name= $request->input('name') ;
        $new_contact->email= $request->input('email');
        $new_contact->sujet= $request->input('sujet') ;
        $new_contact->message= $request->input('message') ;
        $new_contact->photo= $request->file('photo')->store('contacts');
        $new_contact->save();
        //redirection
        return redirect()->route('list_contact')->with('success','votre message est envoyer avec succes');
        // with('',''); message flash
    }
    public function List_contact()
    {
         // recuperation
        $all_contact = Contact::all(); /// select all contact
       // $all_contact = Contact::select('name','email')
//            ->where([
//                ['name','<>','Abdelkalek'],
//                ['email','Abdelkalek']
//
//            ])
//            ->orwhere('email','jsaj@dap.fe')
//              ->whereMonth('created_at','03')
         //   ->whereDate('created_at','2021-03-26')

        //    ->orderby('name')
        //    ->get();
        return view('list_contact',['all_contact'=> $all_contact]);

    }
public function delete_contact($id)
{
  Contact::find($id)->delete();
   return redirect()->route('list_contact')->with('seccess','Supprimer');

}
    public function modifier_contact($id)
    {
        $contact = Contact::find($id);
        return view('edit_contact', compact('contact'));
    }

    public function save_modification_contact(Request $request)
    {
       // dd($request->id);
        $this_contact = Contact::find( $request->id);
      $this_contact->name= $request->input('name') ;
      $this_contact->email= $request->input('email');
      $this_contact->sujet= $request->input('sujet') ;
      $this_contact->message= $request->input('message') ;
      $this_contact->photo= $request->file('photo')->store('contacts');
      $this_contact->save();
        //redirection
        return redirect()->route('list_contact')->with('success','Contact  est Modifier avec succes');
    }
}
