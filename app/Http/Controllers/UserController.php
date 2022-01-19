<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =User::paginate(10);
        return view('admin.user.index', compact('user'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create'); 
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|',
            'type' => 'required'
        ]);

        if ($request -> input('password'))
        {
            $password = bcrypt($request->password);
        }

        else 
        {
            $password = bcrypt('123456789');
        }
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' =>$request->type,
            'password' => $password
            ]);

        return redirect()->back()->with('success','Data admin berhasil ditambahkan');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'type' => 'required'
        ]);

        if($request->input('password'))
        {
            $user_data = [
                'name' => $request->name,
                'type' => $request->type,
                'password' => bcrypt($request->password)
                ];
        }

        else
        {
            $user_data = [
                'name' => $request->name,
                'type' => $request->type
                ];
        }

        $user = User::find($id);
        $user -> update($user_data);
        return redirect()->route('user.index')->with('success', 'Data admin berhasil diedit');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user -> delete();

        return redirect()->back()->with('success', 'Data admin berhasil dihapus');
    }
}