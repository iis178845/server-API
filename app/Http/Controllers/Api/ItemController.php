<?php

namespace App\Http\Controllers\Api;

//import model Item
use App\Models\Item;

use App\Http\Controllers\Controller;

//import resource PostResource
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all items
        $items = Item::latest()->paginate(5);

        //return collection of items as a resource
        return new ItemResource(true, 'List Data Item', $items);
    }
}