<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use \App\Http\Requests\StoreCustomersRequest;

class CustomersController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $customers = Customers::paginate(10);
        $count = Customers::count();
        return view('customers.index', [
            'customers' => $customers,
            'count' => $count
        ]);
    }

    public function create() {
        return view('customers.create');
    }

    public function store(StoreCustomersRequest $request) {
        $Customers = new Customers();
        $Customers->cust_name = $request->cust_name;
        $Customers->cust_email = $request->cust_email;
        $Customers->cust_birthdate = $request->cust_birthdate;
        $Customers->cust_address = $request->cust_address;
        $Customers->cust_phone = $request->cust_phone;        
        $Customers->save();
        alert()->success('บันทึกข้อมูลเรียบร้อยแล้ว.', 'สำเร็จ!');
        return redirect()->action('CustomersController@index');
    }
}
