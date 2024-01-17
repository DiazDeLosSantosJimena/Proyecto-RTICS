<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\typeofusers;
use App\Models\directions;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = users::all();
        //  $users = users::select(('users.id AS idusers'),'users.name','email',('directions.teaching    AS named'),'directions.career',('typeofusers.name AS typeuser'))
        // ->join('directions','users.direction_id','directions.id')        
        // ->join('typeofusers','users.typeofuser_id','typeofusers.id')->get(); 

        //return $users;
        return view('Users.index', compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeofusers = typeofusers::all('id','name');
        $directions = directions::all('id','teaching','career','classroom_id');
        return view('Users.add', compact('typeofusers'), compact('directions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'name'=> 'required',
            'email' =>'required',
            'password' =>'required',
            'signature' => 'required|mimes:png,jpg,jpeg',
            'direction_id' => 'required',
            'typeofuser_id' => 'required'

        ];

        $message = [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo es requerido',
            'password.required' => 'La contraseña es requerida',
            'signature.required' => 'La imagen de la firma es requerida',
            'signature.mimes' => 'El archivo no es valido',
            'direction_id.required' => 'La dirección es requerida',
            'typeofuser_id.required' => 'El Tipo de usuario es requerido',
        ];

        $this->validate($request, $rules, $message);

        $input=$request->all();
        $input['password']=bcrypt($request->password);

        if( isset($input["signature"])){
            $input["signature"] = $fileName = time().'.'.$input["signature"]->extension();
    
            $request->signature->move(public_path("file"),$fileName);
          }
        
        // if($request->hasFile('signature')){
        //     $input['signature'] = time().'_'. $request->file('signature')->getClientOriginalName();
        //     $request->signature->move(public_path("file"),$input);
        //     // $request->file('signature')->public_path('users_img', $input['signature']);
        // }
        users::create($input);
        return redirect('users')->with('message','Se ha creado correctamente el usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = users::findOrFail($id);
        return view('Users.show')->with('users',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeofusers = typeofusers::all('id','name');
        $directions = directions::all('id','teaching','career','classroom_id');
        $user = users::findOrFail($id);
        return view('Users.edit', compact('typeofusers'), compact('directions'))->with('users', $user);
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
        $user= users::findOrFail($id);
        $rules =[
            'name'=> 'required',
            'email' =>'required',
            'password' =>'required',
            'signature' => 'required|mimes:png,jpg,jpeg',
            'direction_id' => 'required',
            'typeofuser_id' => 'required'

        ];

        $message = [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo es requerido',
            'password.required' => 'La contraseña es requerida',
            'signature.required' => 'La imagen de la firma es requerida',
            'signature.mimes' => 'El archivo no es valido',
            'direction_id.required' => 'La dirección es requerida',
            'typeofuser_id.required' => 'El Tipo de usuario es requerido',
        ];

        $this->validate($request, $rules, $message);
        $input=$request->all();
        $input['password']=bcrypt($request->password);

        if( isset($input["signature"])){
            $input["signature"] = $fileName = time().'.'.$input["signature"]->extension();
    
            $request->signature->move(public_path("file"),$fileName);
          }
          
        $user->update($input);
        return redirect('users')->with('info','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = users::findOrFail($id);
        $user->delete();
        return back()->with('danger','correctamente el usuario');
    }
}

