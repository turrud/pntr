<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;

class ViewOrderController extends Controller
{
    public function index()  {
        return view('app.views.home.index');
    }

    public function create(OrderStoreRequest $request)  {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }
        $order = Order::create($validated);

        // return view('app.views.home.index', compact('order'))->with('success', 'Pendaftaran Berhasil');

        return redirect()->route('home.index')
                    ->with([
                        'order' => $order,
                        'success' => 'Pendaftaran Berhasil'
                    ]);
    }


}