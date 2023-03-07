<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\Rules\Exists;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id_details = OrderDetails::all();
        return view('create-order', compact('id_details'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $datos = [
            'numorden' => 'required|integer',
            'monto' => 'required|integer',
            'estado' => 'required|string',
        ];

        $this->validate($request, $datos);

        $now = new Carbon();
        $now = $now->format('Y-m-d H:i'); 
        // dd($request->except('_token'));
        $orden = new Order();
        $orden->numeroDeOrden = $request->numorden;
        $orden->fecha = $now;
        $orden->monto = $request->monto;
        $orden->estado = $request->estado;
        $orden->id_user = $request->id_user;
        if (isset($request->id_details)) {
            $orden->id_details = $request->id_details;
        }

        $orden->save();

        return redirect()->route('orders')->with('message', 'datos guardados correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id_details = OrderDetails::all();
        $order = Order::find($id);
        return view('edit-order', compact('order', 'id_details'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order, $id)
    {
        
        
        $datos = [
            'numorden' => 'required|integer',
            'fecha' => 'required|string',
            'monto' => 'required|integer',
            'estado' => 'required|string',
            'id_user' => 'required|integer',
        ];

        $this->validate($request, $datos);

        $orden =  Order::findOrFail($id);
        $orden->numeroDeOrden = $request->numorden;
        $orden->fecha = $request->fecha;
        $orden->monto = $request->monto;
        $orden->estado = $request->estado;
        $orden->id_user = $request->id_user;
        if (isset($request->id_details)) {
            $orden->id_details = $request->id_details;
        }
        $orden->save();

        return redirect()->route('orders')->with('message', 'datos guardados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order, $id)
    {
        Order::destroy($id);
        return redirect()->route('orders')->with('message', 'datos eliminados');
    }
}
