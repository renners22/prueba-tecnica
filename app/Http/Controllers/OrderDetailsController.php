<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderdetails = OrderDetails::all();
        return view('orderDetails', compact('orderdetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id_orders = Order::all();
        return view('create-orderDetails', compact('id_orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->except('_token'));
        $datos = [
            'articulo' => 'required|string',
            'cantidad' => 'required|integer',
            'precio' => 'required|string',
            'total' => 'required|string',
            'id_orders' => 'required',
        ];

        $this->validate($request, $datos);

        $details = new OrderDetails();
        $details->articulo = $request->articulo;
        $details->cantidad = $request->cantidad;
        $details->precio = $request->precio;
        $details->total = $request->total;
        $details->id_orders = $request->id_orders;

        $details->save();

        return redirect()->route('orders-details');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderDetails $orderDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id_orders = Order::all();
        $details = OrderDetails::find($id);
        return view('edit-orderDetails', compact('details', 'id_orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderDetails $orderDetails, $id)
    {
        $datos = [
            'articulo' => 'required|string',
            'cantidad' => 'required|integer',
            'precio' => 'required|string',
            'total' => 'required|string',
            'id_orders' => 'required',
        ];

        $this->validate($request, $datos);

        $details = OrderDetails::findOrFail($id);
        $details->articulo = $request->articulo;
        $details->cantidad = $request->cantidad;
        $details->precio = $request->precio;
        $details->total = $request->total;
        $details->id_orders = $request->id_orders;

        $details->save();

        return redirect()->route('orders-details');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDetails $orderDetails, $id)
    {
        OrderDetails::destroy($id);
        return redirect()->route('orders-details');
    }
}
