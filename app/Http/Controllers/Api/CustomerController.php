<?php

namespace App\Http\Controllers\Api;

//import model Item
use App\Models\Customer;

use App\Http\Controllers\Controller;

//import resource PostResource
use App\Http\Resources\CustomerResource;

class CustomerController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all items
        $customers = Customer::latest()->paginate(5);

        //return collection of customers as a resource
        return new CustomerResource(true, 'List Data Customer', $customers);
    }
}