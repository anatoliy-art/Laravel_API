<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderWindow;

class OrderWindowController extends Controller
{
    public function index()
    {
        $orders = OrderWindow::where(['visible' => 'manager'])->paginate(10);
        return view('admin.order-window.index', compact('orders'));
    }

    public function edit($id)
    {
        $order = OrderWindow::find($id);
        $order->update([
            'visible' => 'calculator',
        ]);
        return redirect()->back()->with('success', 'Заказ отправлен Калькуляторщику!');
    }

    public function back($id, $role)
    {
        $order = OrderWindow::find($id);

        switch ($role) {
            case 'manager':
                $order->update([
                    'visible' => 'manager',
                ]);
                return redirect()->back()->with('success', 'Заказ отправлен Менеджеру!');
                break;
            case 'calculator':
                $order->update([
                    'visible' => 'calculator',
                ]);
                return redirect()->back()->with('success', 'Заказ отправлен Калькуляторщику!');
                break;            
/*            default:
                // code...
                break;*/
        }


        
    }

    public function calculatorList()
    {
        $orders = OrderWindow::where(['visible' => 'calculator'])->with(['window'])->paginate(10);
        return view('admin.order-window.calculatorList', compact('orders'));
    }

    public function calculator($id)
    {
        $order = OrderWindow::find($id);
        return view('admin.order-window.calculator', compact('order'));
    }

    public function calculatorUpdate(Request $request, $id)
    {
        $validate = $request->validate([
            'price_material' => 'required|integer',
            'time_spent' => 'required|integer',
            'price_hour' => 'required|integer',
        ]);

        $order = OrderWindow::find($id);
        $window_dimensions = ((($order->width + $order->height) * 2) + ($order->hutters - 1) * $order->height) / 100;
        $order_price = ($window_dimensions * $validate['price_material']) + ($validate['time_spent'] * $validate['price_hour']);

        $order->update([
            'price' => $order_price,
            'material_price' => $validate['price_material'] * $window_dimensions,
            'time_price' => $validate['time_spent'] * $validate['price_hour'],
        ]);
        
        return redirect()->route('calculatopList.window.index')->with('success', 'Стоимость заказа успешно посчитана!');
    }

    public function deliverList()
    {
        $orders = OrderWindow::where(['visible' => 'deliver'])->with(['window'])->paginate(10);
        return view('admin.order-window.deliverList', compact('orders'));
    }

    public function deliver($id)
    {
        $order = OrderWindow::find($id);

        if($order->price == null && $order->material_price == null && $order->time_price == null){
            return redirect()->back()->with('error', 'Заказ должен быть посчитан!');
        }else{
            $order->update([
                'visible' => 'deliver',
            ]);
            return redirect()->back()->with('success', 'Заказ отправлен Доставщику!');            
        }
    }

    public function statusOrder(Request $request, $id)
    {
        $validate = $request->validate([
            'status' => 'required',
        ]);

        $order = OrderWindow::find($id);
        $order->update([
            'status' => $validate['status'],
        ]);
        return redirect()->back()->with('success', 'Статус заказа изменен!');
    }

    public function delete($id)
    {
        $order = OrderWindow::find($id);
        
        if($order->status == '0'){
            return redirect()->back()->with('error', 'Перед удалением заказ должен быть закрыт!');
        }

        $order->delete();
        return redirect()->back()->with('success', 'Заказ успешно удален!');
    }

}
