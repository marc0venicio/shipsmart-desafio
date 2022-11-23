<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Resources\AddressCollection;
use App\Http\Services\Address\AddressService;
use App\Mail\TestMailable;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $success = new AddressCollection(Address::paginate($request->input('limit', 10), ['*'], 'offset', $request->input('offset', 1)));

        return response()->json($success, 200);
    }

    public function show(Address $id) {

        return Address::findOrfail($id);
    }

    public function store(StoreAddressRequest $request, AddressService $addressService){

        $data = $request->validated();

        $address = $addressService->store($data);

        Mail::to('hello@example.com')->send(new TestMailable($address));

        return response()->json([
            'status' => true,
            'message' => "Address Created successfully!",
            'data' => $address
        ], 200);
    }

    public function update(StoreAddressRequest $request, Address $address, AddressService $addressService){

        $data = $request->validated();
        
        $address = $addressService->update($data, $address);

        return response()->json([
            'status' => true,
            'message' => "Address Updated successfully!",
            'data' => $address
        ], 200);
    }

    public function delete(Address $address, AddressService $addressService){

        $address->contact()->delete();
        $data = $address->delete();

        return response()->json([
            'status' => true,
            'message' => "Address Deleted successfully!",
            'data' => $data 
        ], 200);
    }

    public function buscaCep(string $cep, AddressService $addressService){
        $address = $addressService->buscaCep($cep);
        return response()->json([
            'status' => true,
            'message' => "Address return successfully!",
            'data' => $address
        ], 200);
    }
}
