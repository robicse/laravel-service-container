<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use App\Services\PaymentService;
use App\Services\PaymentServiceContract;
use App\Services\PaypalGateway;
use App\Container;
use Illuminate\Http\Request;


class PostController extends Controller
{



    // public function show(PaymentService $payment){
    //     // dd(app());
    //     dd($payment);
    // }

    public function show(){
        // $payment = app(PaymentServiceContract::class);
        // $payment = app()->make(PaymentServiceContract::class);
        // $payment = resolve(PaymentServiceContract::class);
        // dd($payment);

        // dd(resolve(PaymentServiceContract::class), resolve(PaymentServiceContract::class));

        $container = new Container();
        $container->bind(PaymentServiceContract::class, function () {
            return new PaypalGateway("PaymentTest123321");
        });

        $payment = $container->make(PaymentServiceContract::class);
        dd($payment);

    }

}
