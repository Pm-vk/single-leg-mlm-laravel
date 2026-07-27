<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Levelsetting;
use App\Models\Income;
use App\Models\DirectIncome;
use App\Models\Epin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $request->session()->put($credentials);
        // echo session('email').session('password');die;
        if (Auth::attempt($credentials)) {
            return redirect()->intended('index')
                        ->withSuccess('Signed in');
        }

        return redirect("/")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'referralkey' => 'required',
            'sponserid' => 'required',
            'mobile' => 'required|digits:10',
            'amount' => 'required|min:3',
            'epin' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
        ]);

        $data = $request->all();

        // Create Epin record if missing
        DB::table('epins')->insertOrIgnore([
            'user_id' => '1',
            'pin' => $data['epin'],
            'status' => 'Open',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $check = $this->create($data, null);

        DirectIncome::create([
            'userref' => $data['referralkey'],
            'amount' => ($data['amount'] * 30) / 100
        ]);

        DB::update('update epins set status = ? where pin = ?', ['Close', $data['epin']]);

        return redirect("index")->withSuccess('User Added Successfully Thanks');
    }


    // public function falledmsg(){
    //     return "E-Pin Expired";
    // }
    // public function successmsg(){
    //     return "Thanks you for being a part of Our Bussiness";
    // }


    public function create(array $data, $ures)
    {
        // $spid = DB::table('users')-> where('email', session('email'))->get();
        // $datas= $spid;
        // // return $datas;

        // $decode=json_decode($datas);

        // foreach($decode as $res)

      return User::create([
        'name' => $data['name'],
        'forenid' => $ures->id,
        'referralkey' => $data['referralkey'],
        'sponserid' => $data['sponserid'],
        'mobile' => $data['mobile'],
        'amount' => $data['amount'],
        'epin' => $data['epin'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);


    }

    // public function amountDstribute(){

    //     $users = DB::table('users')-> where('sponserid', '010102')->get()->toArray();

    // }


    public function dashboard()
    {
        if(Auth::check()){
            return view('index');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }


    public function levelSettingo(Request $request)
    {
        if(Auth::check()){
        $data = $request->all();

        // echo $data['level'].$data['commision'];die;

        $check = $this->createlevel($data);

        return redirect("levelSetting")->withSuccess('Record Added');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }


    public function createlevel(array $data)
    {
        if(Auth::check()){
            return levelSetting::create([
                'level' => $data['level'],
                'commision' => $data['commision']
            ]);
        }

        return redirect("/")->withSuccess('You are not allowed to access');

    }
    public function levelSetting()
    {
        if(Auth::check()){

        return view('levelSetting');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function LevelList() {
        if(Auth::check()){
        return view('levelSetting');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function levelindex()
    {
        if(Auth::check()){
        $levels = DB::table('levelsettings')->get();

        return view('levelSetting', ['levelsList' => $levels]);
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    // AddUsers Query

    public function totalMembers()
    {
        if(Auth::check()){
            $count = DB::table('users')->count();
            $inco = DB::table('incomes')->sum('day_bal');
            return view('index',['tusers'=>$count, 'tinco'=>$inco]);
        }

        return redirect("/")->withSuccess('You are not allowed to access');


    }

    // public function TotalCommission()
    // {

    //     $inco = DB::table('incomes')->count();
    //     return view('index',['tinco'=>$inco]);
    // }
}
