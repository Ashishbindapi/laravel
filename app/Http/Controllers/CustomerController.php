<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $url = url('/customer/view');
        $customer = [];
        $tittle = "Customer Registration Form";
        $data = compact('url','tittle','customer');
        return view('customer')->with($data);
    }

    public Function store(Request $request)
    {
        $customer = new Customer;
        $customer->user_name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer/view');
    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? '';
        if($search != ''){
            $customers = Customer::where('user_name', 'Like', "%$search%")->orwhere('email', 'Like', "%$search%")->get();
        }else{
            $customers = Customer::paginate(15);
        }
        $data = compact('customers', 'search');
        return view('customer-view')->with($data);
    }

    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect()->back();
    }

    public function restore($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->restore();
        }
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->forceDelete();
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if(is_null($customer)){
            return redirect('customer');
        }else{
            $url = url('/customer/update')."/".$id;
            $tittle = "Update Registration Form";
            $data = compact('customer','url','tittle');
            return view('customer')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->user_name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->dob = $request['dob'];
        $customer->save();

        return redirect('/customer/view');
    }
}
