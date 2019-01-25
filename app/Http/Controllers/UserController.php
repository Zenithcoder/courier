<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Illuminate\Support\Facades\Mail;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Session;

class UserController extends Controller {

    public function __construct() {
      //  $this->middleware(['auth', 'auth.admin']); //isAdmin middleware lets only users with a //specific permission to access these resources
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     **/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function contactUsPost(Request $request) {
     
     $email = 'admin@gld.ng';
    // dd($request);
     Mail::send('emails.contact',  array( 
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ), function ($message) use ($email) {
                $message->to($email);
                 $message->from('info@gld.ng', 'Contact US');
                $message->subject('GLD');
            });
        return back()->with('success','Submitted Successfully');
    }

 public function create()
    {
        return view('riders.cost');
   }

   public function createP(Request $request)
    {
        $client = new Client();

        if($request->from == 'null' || $request->to == 'null' )
        {
            return back();
        }
         
        $response = $client->get('https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial', [
            'query' => [
                'origins' => $request->from,
                'destinations' => $request->to,
                'key' =>  getGoogleKey(),
            ],
        ]);


        $response = json_decode($response->getBody(), true);
        $pickup = $response['origin_addresses'][0];
        $drop = $response['destination_addresses'][0] ;
        $time = $response['rows'][0]['elements'][0]['duration']['text'];
        $distance2 = $response['rows'][0]['elements'][0]['distance']['text'];

        $weight =  $request->weight;
      //  $firstIndex = stripos($distance, 'k');
      //  $second = $firstIndex +1;
       $distance = trim(substr($distance2,0,-2));
       //dd($distance2);
         $price = ($distance * 200) + ($weight * 300);
     //   Session::put(['pickup'=> $pickup, 'drop'=> $drop , 'distance'=> $distance, 'time'=> $time]);
         

        return back()->with('success',$price);
   }
    /*
    public function index() {
        //Get all users and pass it to the view
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     
    public function create() {
        //Get all roles and pass it to the view
        $roles = Role::get();
        return view('admin.users.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     
    public function store(Request $request) {
        //Validate name, email and password fields
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);

        $user = User::create($request->only('email', 'name', 'password', 'address', 'city', 'pic', 'phone_num'));

        $roles = $request['roles']; //Retrieving the roles field
        //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r); //Assigning role to user
            }
        }
        //Redirect to the users.index view and display message
        return redirect()->route('users.index')
            ->with('flash_message',
                'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function show($id) {
        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function edit($id) {
        $user = User::findOrFail($id); //Get user with specified id
        $roles = Role::get(); //Get all roles


        return view('admin.users.edit', compact('user', 'roles')); //pass user and roles data to view

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function update(Request $request, $id) {
        $user = User::findOrFail($id); //Get role specified by id

        //Validate name, email and password fields
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|min:6|confirmed'
        ]);
        $input = $request->only(['name', 'email', 'password']); //Retrieve the name, email and password fields
        $roles = $request['roles']; //Retrieve all roles
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
        }
        else {
            $user->roles()->detach(); //If no role is selected remove existing role associated to a user
        }
        return redirect()->route('users.index')
            ->with('flash_message',
                'User successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function destroy($id) {
        //Find a user with a given id and delete
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('flash_message',
                'User successfully deleted.');
    } */


}