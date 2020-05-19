<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Danhmucsanpham;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Trong function boot tạo 1 view. Rồi trỏ tới composer
        //Trong composer tạo 1 function(có tham số là $view)
        view()->composer(['header','page.dat_hang'], function($view){
            $loai_sp = Danhmucsanpham::all();

            //loai_sp là tên tham số mình truyền qua. Còn $loai_sp là giá trị mình cần truyền đi.
            $view->with('loai_sp', $loai_sp);
        });
        view()->composer(['header','page.dat_hang'], function($view){
            //chưa hiểu lắm
            if(Session('cart')){
                //để check xem trong giả hàng hiện tại có SP nào đc mua hay chưa?
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 
                            'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
