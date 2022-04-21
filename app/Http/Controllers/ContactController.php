<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::withTrashed()->get()->sortByDesc('created_at');

        return view( 'contacts.index', compact( 'contacts') );


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = new Contact;

        return view( 'contacts.create', compact( 'contact') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @var Contact $contact
     */
    public function store(Request $request)
    {

        $this->validate( $request, [
            'contact' => 'required|digits:9|unique:contacts,contact',
            'email' => 'required|email|unique:contacts,email',
            'name' => 'required|min:5|max:255',
        ], [], [] );

        $dados = $request->all();
      
        Contact::create($dados);

        return redirect()->route( 'contacts.index' );
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view( 'contacts.edit', compact('contact' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {

        $this->validate( $request, [
            'contact' => 'required|digits:9|unique:contacts,contact,'.$contact->id.',id',
            'email' => 'required|email|unique:contacts,email,'.$contact->id.',id',
            'name' => 'required|min:5|max:255',
        ], [], [] );

        $dados = $request->only('name', 'contact', 'email');

      
        $contact->update($dados);

        return redirect()->route( 'contacts.index' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route( 'contacts.index' );

    }
}
