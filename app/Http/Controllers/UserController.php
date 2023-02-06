<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    protected $user;
    public function store(Request $request)
    {
      
        $request->validate([
            'nom' => 'required|string|regex:/^[a-zA-Z]+$/|max:255',
            'prenom' => 'required|string|regex:/^[a-zA-Z]+$/|max:255',
            'email' => 'required|string|unique:users|email|max:255',
            'user_type' => 'required|string|regex:/^[a-zA-Z]+$/|max:255',
            'password' => 'required|string|min:8',
        ]);
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'user_type' => $request->user_type,
            'password' => Hash::make($request->password),
        ]);
        if($user){
            return ["result"=>"user created"];
        }else 
            return ["result"=>"user not created"];
    }
    
    function login(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ]; 
             return response($response, 201);
    }

    public function upload_logo(Request $request)
    {
        //$request->validate([
           // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       // ]);
        //$imageName = time().'.'.$request->image->extension();  
       // $request->image->move(public_path('assets/images/logos'), $imageName);
       // $request->user->logo = $imageName;
       // $request->user->save();
        //return response(201);
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('assets/images'), $imageName);
        $request->user->logo = $imageName;
        $request->user->save();
        return response()->json(['success' => true, 'imageName' => $imageName]);
    }
    function index()
    {
         return view('Acc');
    }
    function print_ord(Request $request)
    {
        $meds = $request->meds;
         return view('ordonnance',compact('meds'));
    }
}
