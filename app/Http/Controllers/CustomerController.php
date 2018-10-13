<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
	public function index() {
		$customers = Customer::all();
		return view('customers.index',compact('customers'));
	}

	public function create() {
		$customer = new Customer;
		return view('customers.create',compact('customer'));
	}

	public function store(Request $request) {
		auth()->user()->customers()->create($request->all());
		return redirect('customers');
	}

	public function edit(Customer $customer) {
		return view('customers.edit',compact('customer'));
	}

	public function update(Customer $customer, Request $request) {
		$customer->update($request->all());
		return redirect('customers');	
	}


}
