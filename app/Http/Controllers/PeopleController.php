<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use DB;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peoples=People::latest()->paginate(3);
        return view('index',compact('peoples'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $peoples = DB::table('people')->where('phone', 'like', '%' .$search. '%')->paginate(1);
        return view('index',['peoples'=>$peoples]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
                'name'    =>  'required|max:100',
                'phone'     =>  'required|max:10',
                'age'     =>  'required|min:1|max:120',
                'hobbies'     =>  'required',
                'about'     =>  'required|min:50|max:500',
                'image'         =>  'image|max:200|required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $input_data = array(
            'name'       =>   $request->name,
            'phone'        =>   $request->phone,
            'age'        =>      $request->age,
            'hobbies'        =>       $request->hobbies,
            'about'        =>       $request->about,
            'image'            =>   $new_name
        );

        People::create($input_data);

        return redirect('people')->with('Success', 'Employee Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = People::findOrFail($id);
        return view('show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
