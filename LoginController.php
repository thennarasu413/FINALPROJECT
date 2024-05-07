<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('barcode');
    }

    public function readBarcode(Request $request)
    {
        $barcode = $request->input('barcode');
        // Process the barcode value, e.g., look up a product in the database
        return view('barcoderesult', compact('barcode'));
    }
    //REGSTER PAGE FUNCTION
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'emailid' => 'required|email',
            'roll' => 'required|string',
            'password' => 'required|numeric' // Assuming password must be numeric based on your schema
        ]);
                DB::table('user')->insert([
                'name' => $request->input('name'),
                'emailid' => $request->input('emailid'),
                'roll' =>$request->input('roll'), 
                'password' =>$request->input('password'),   
            ]);
            return redirect('login')->with('success', 'User created successfully.');
    }
    //LOGIN PAGE FUNCTION
    public function login(Request $request)
    {
        $roll = $request->input('roll');
        $password = $request->input('password');
        $data = DB::table('user')->where('roll', $roll)->first();
        if ($data) {
            if ($password == $data->password) {
            // Redirect to the new page after successful login
                return redirect('studentdashboard')->with('success', 'Login successful. Welcome');
            } else {
                return redirect('login')->with('error', 'Invalid credentials. Please try again.');
        }
        } else {
            return redirect('login')->with('error', 'Admin not found. Please try again.');
        }
    }
    //ADMINLOGIN
    public function adminlogin(Request $request)
    {
        $email = $request->input('emailid');
        $password = $request->input('password');
        $data = DB::table('admin')->where('emailid', $email)->first();
        if ($data) {
            if ($password == $data->password) {
            // Redirect to the new page after successful login
                return redirect('admindashboard')->with('success', 'Login successful. Welcome');
            } else {
                return redirect('adminlogin')->with('error', 'Invalid credentials. Please try again.');
        }
        } else {
            return redirect('adminlogin')->with('error', 'Admin not found. Please try again.');
        }
    }

  

    //ADDBALANCE PAGE FUNCTION
    public function addbalance(Request $request)
    {
        $roll = $request->input('roll');
        $amount = $request->input('amount');
    
        // Check if there is already an entry for the email
        $currentBalance = DB::table('user')->where('roll', $roll)->first();
    
        if ($currentBalance) {
            // If the record exists, update it
            DB::table('user')
                ->where('roll', $roll)
                ->update(['amount' => $currentBalance->amount + $amount]);
        } else {
            // If no record exists, insert a new one
            return response()->json(['message' => 'User Not Found']);
        }
        return view('admindashboard');
    }
    
    //DELETE STUDENT FUNCTION
    public function delete(Request $request) {
        $roll = $request->input('roll');
    
        // Check if the email is provided
        if (!$roll) {
            return response()->json(['message' => 'No email provided'], 400); // Bad request
        }
    
        // Perform the deletion
        $deleted = DB::table('user')->where('roll', $roll)->delete();
    
        // Check if the delete was successful
        if ($deleted) {
            return response()->json(['message' => 'User deleted successfully']);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }
    //STUDENTBALANCEENQIURE
    public function studentbalance(Request $request)
    {
        // dd($request->input('roll'));
        $request->validate([
            'roll' => 'required',
            'pin' => 'required',
        ]);

        // $user = DB::table('user', $request->input('roll'))->first();
        $user = DB::table('user')->where('roll',$request->input('roll'))->first();


        //if (!$user || !Hash::check($request->pin, $user->pin)) {
          //  return response()->json(['message' => 'Invalid credentials'], 401);
        //}
        // dd($user);
        return response()->with(['amount' => $user->amount]);
    }
    //MAKE PAYMENTS 
    public function payment(Request $request)
    {
        $request->validate([
            'emailid' => 'required|email',
            'pin' => 'required|numeric',
            'amount' => 'required|numeric'
        ]);

        DB::transaction(function () use ($request) {
            $user = DB::where('emailid', $request->emailid)->where('pin', $request->pin)->first();
            
            if (!$user) {
                return response()->json(['message' => 'Invalid credentials'], 401);
            }

            $store = DB::where('emailid', $request->emailid)->first();
            if (!$store) {
                $storebalance = new DB(['emailid' => $request->emailid, 'balance' => 0]);
            }

            $store->balance += $request->amount;
            $store->save();

            return response()->json(['message' => 'Balance updated successfully']);
        });
    }
    public function changepassword(Request $request)
    {
        
    // Validate the request data
    $request->validate([
        'roll'   => 'required|exists:user,roll', // Assuming your table name is 'users' and it has a 'roll' column
        'oldpin' => 'required|digits:4',
        'newpin' => 'required|digits:4'
    ]);

    // Retrieve the user by roll number
    $user = DB::where('roll', $request->roll)->first();

    // Check if the user exists
    if (!$user) {
        return redirect()->back()->withErrors(['roll' => 'No user found with the provided roll number.'])->withInput();
    }

    // Check if the provided old PIN is correct
    if (!DB::check($request->oldpin, $user->password)) {
        return redirect()->back()->withErrors(['oldpin' => 'The provided PIN is incorrect.'])->withInput();
    }

    // Update the PIN in the database
    $user->password = DB::make($request->newpin);
    $user->save();

    // Redirect to a success page or back with a success message
    return redirect()->route('your-route-name-here')->with('success', 'PIN changed successfully.');
}

    /*
    public function displayregister(){

        return view('register');
    }
    public function del(Request $request){

        $title = $request->input('remark');
        $email = $request->input('email');
     
       

        Mail::to($email)->send(new WelcomeEmail($title));
    }*/
      //STORELOGINPAGE
      public function storelogin(Request $request)
      {
          $email = $request->input('emailid');
          $password = $request->input('password');
          $data = DB::table('admin')->where('emailid', $email)->first();
          if ($data) {
              if ($password == $data->password) {
              // Redirect to the new page after successful login
              return redirect('storedashboard')->with('success', 'Login successful. Welcome');
              } else {
                  return redirect('login')->with('error', 'Invalid credentials. Please try again.');
          }
          } else {
              return redirect('login')->with('error', 'Admin not found. Please try again.');
          }
      } 

      //STOREPAYMENTPAGE
      public function storepayment(Request $request)
      {
          $roll = $request->input('roll');
          $amount = $request->input('amount');
          $description = $request->input('description');
  
          try {
              DB::beginTransaction();
  
              // Get the user
              $user = user::findOrFail($roll);
  
              if ($user->balance < $amount) {
                  return response()->json(['error' => 'Insufficient balance'], 422);
              }
  
              // Deduct the amount from the user's balance
              $user->balance -= $amount;
              $user->save();
  
              // Add the amount to the store table
              $store = new user();
              $store->amount = $amount;
              $store->description = $description;
              $store->save();
  
              DB::commit();
  
              return response()->json(['message' => 'Transaction successful'], 200);
          } catch (\Exception $e) {
              DB::rollBack();
              return response()->json(['error' => 'Transaction failed', 'details' => $e->getMessage()], 500);
          }
      }

      //CATEENLOGIN
      public function cateenlogin(Request $request)
      {
          $email = $request->input('emailid');
          $password = $request->input('password');
          $data = DB::table('admin')->where('emailid', $email)->first();
          if ($data) {
              if ($password == $data->password) {
              // Redirect to the new page after successful login
              return redirect('cateendashboard')->with('success', 'Login successful. Welcome');
              } else {
                  return redirect('login')->with('error', 'Invalid credentials. Please try again.');
          }
          } else {
              return redirect('login')->with('error', 'Admin not found. Please try again.');
          }
      } 

      //STATIONARYLOGIN
      public function stationerylogin(Request $request)
      {
          $email = $request->input('emailid');
          $password = $request->input('password');
          $data = DB::table('admin')->where('emailid', $email)->first();
          if ($data) {
              if ($password == $data->password) {
              // Redirect to the new page after successful login
              return redirect('stationerydashboard')->with('success', 'Login successful. Welcome');
              } else {
                  return redirect('login')->with('error', 'Invalid credentials. Please try again.');
          }
          } else {
              return redirect('login')->with('error', 'Admin not found. Please try again.');
          }
      } 
    }
