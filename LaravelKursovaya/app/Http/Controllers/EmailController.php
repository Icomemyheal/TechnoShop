<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use App\Mail\OrderMail;
use App\Models\Order;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function processOrder(Request $request)
    {   
        $validatedData = $request->validate([
            'lastName' => 'required|string|max:25',
            'firstName' => 'required|string|max:20',
            'phoneNumber' => 'required|numeric',
            'email' => 'nullable|email',
        ]);

        $orderId = session('orderId');
        $order = $orderId ? Order::findOrFail($orderId) : new Order();

        $lastName = $request->input('lastName');
        $firstName = $request->input('firstName');
        $phoneNumber = $request->input('phoneNumber');
    
        // Перевірка, чи email не є пустим (null), та присвоєння значення за замовчуванням
        $email = filled($validatedData['email']) ? $validatedData['email'] : 'example@example.com';

        $title = 'Ваше замовлення у магазині TechoShop отримано!';
        $body = 'Дякуємо за Ваше замовлення, ми вже готуємо його для Вас :)';

        Mail::to($email)->send(new OrderMail($title, $body, $lastName, $firstName, $phoneNumber, $order));

        return redirect()->route('basket');
    }
}
