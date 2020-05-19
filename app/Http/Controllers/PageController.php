<?php

namespace App\Http\Controllers;
//muốn sử dụng model thì phải khai báo thư viện của nó.
use App\Slide;
use App\Sanpham;
use App\Danhmucsanpham;
use App\Cart;
use Session;
use App\Khachhang;
use App\Donhang;
use App\Chitietdonhang;
use App\User;
use Hash;
use Auth;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getADmin(){
        return view('admin.layout.index');
    }
    public function index(){
    	// $comment = Comment::latest()->take(10)->get();
    	// $tintuc = TinTuc::latest()->take(10)->get();
        return view('admin.home');
        //,['tintuc' => $tintuc]
    }
    //
    public function getIndex(){
        //hứng dữ liệu từ table Slide(model app/Slide.php)
        $slide = Slide::all();
        // print_r($slide);
        // exit;
        
        // New-Product
        //get() ở đây là lấy hết all product ra luôn
        // $new_product = Product::where('new', 1)->get();
        // dd($new_product);
        //bây giờ chỉ muốn pagination để show "n" product trên 1 trang thôi.
        $new_product = Sanpham::where('moi',1)->paginate(8);

        //Top-product
        $sanpham_khuyenmai = Sanpham::where('giamgia', '<>', 0 )->paginate(8,['*'],'pag');

        //
        //Cách 1 - truyền mảng
        //để truyền $slide này qua 'trangchu' ==> dùng 1 mảng (slide sẽ trỏ tới biến truyền vào là $slide)
        // return view('page.trangchu',['slide'=>$slide]);

        //Cách 2 - dùng compact
        return view('page.trangchu',compact('slide','new_product', 'sanpham_khuyenmai'));

    }
    //truyền vào 1 tham số để biết được ID các sản phẩm mà mình cần lấy.
    public function getLoaiSp($type){
        $sp_theoloai = Sanpham::where('id_danhmucsanpham',$type)->paginate(6);
        $sp_khac = Sanpham::where('id_danhmucsanpham','<>',$type)->paginate(3,['*'],'pag');
        $loai = Danhmucsanpham::all();
        $loai_sp = Danhmucsanpham::where('id',$type)->first();


        //loai_sanpham là tên file trong resource/views/page/loai_sanpham.php (Tức là truyền các biến này qua bên VIEW)
        return view('page.loai_sanpham',compact('sp_theoloai', 'sp_khac', 'loai','loai_sp'));
    }

    //
    public function getChiTiet(Request $req){
        //Vì mỗi sp chỉ có 1 id duy nhất nên dùng first(). còn get() là lấy hết.
        $sanpham = Sanpham::where('id',$req->id)->first();
        $sp_tuongtu = Sanpham::where('id_danhmucsanpham',$sanpham->id_danhmucsanpham)->paginate(3);
        //chitiet_sanpham là tên file trong resource/views/page/loai_sanpham.php
        return view('page.chitiet_sanpham',compact('sanpham','sp_tuongtu'));
    }
    //
    public function getGioiThieu(){
        return view('page.gioithieu');
    }
    //
    public function getLienHe(){
        return view('page.lienhe');
    }
    //add cart
    public function getAddtoCart(Request $req, $id){
        //check xem có id(SP) đó hay k
        $product = Sanpham::find($id);
        //Tạo 1 biến old_cart check xem hiện tại trong Session của mình có Session Cart hay chưa? (check xem session hiện tại có SP nào đc mua hay chưa)
        //Check có hay không? Dùng toán tử 3 ngôi.  Nếu có thì lấy còn không có thì đẻ NULL
        $oldCart = Session('cart')?Session::get('cart'):null;
        //Tạo 1 biến $cart để khởi tại 1 cái giỏ hàng mới(ở đây là gán vào giở hàng cũ của mình để nó gộp chung vào giỏ hàng ban đầu)        
        //tạo 1 biến. Mình new nó sau đó gọi đến method addCart ở bên Cart.php
        $cart = new Cart($oldCart);

        //Sau đó để thêm 1 phần từ vào giỏ hàng mình dùng method add()  
        $cart->add($product,$id);
        //Bây giờ phải gán cái Cart này vào trong Session-> dùng Request
        //Tức là dùng Request để put cái cart của mình vào trong Sesion.
        $req->session()->put('cart', $cart);
        //Sau khi add vào đc thì mình trở lại trang chủ.
        return redirect()->back();
    }
    //delete 1 cart
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        //bây giờ trỏ đến method delete 1 SP
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }

        return redirect()->back();
    }

    //
    public function getCheckout(){
        return view('page.dat_hang');
    }

    public function postCheckout(Request $req){
        $cart = Session::get('cart');
        // dd($cart);

        // $customer = new Customer;
        // $customer->name = $req->name;
        // $customer->gender = $req->gender;
        // $customer->email = $req->email;
        // $customer->address = $req->address;
        // $customer->phone_number = $req->phone;
        // $customer->note = $req->notes;
        // $customer->save();

        $customer = new Khachhang;
        $customer->ten = $req->ten;
        $customer->gioitinh = $req->gioitinh;
        $customer->email = $req->email;
        $customer->diachi = $req->diachi;
        $customer->sodienthoai = $req->sodienthoai;
        $customer->ghichu = $req->ghichu;
        $customer->save();

        // $bill = new Bill;
        // $bill->id_customer = $customer->id;
        // $bill->date_order = date('Y-m-d');
        // $bill->total = $cart->totalPrice;
        // $bill->payment = $req->payment_method;
        // $bill->note = $req->notes;
        // $bill->save();

        $bill = new Donhang;
        $bill->id_khachhang = $customer->id;
        $bill->id_khachhang = $customer->id;
        $bill->ngay_order = date('Y-m-d');
        $bill->tongtien = $cart->totalPrice;
        $bill->hinhthucthanhtoan = $req->payment_method;
        $bill->ghichu = $req->notes;
        $bill->save();

        // foreach ($cart->items as $key => $value) {
        //     $bill_detail = new BillDetail;
        //     $bill_detail->id_bill = $bill->id;
        //     $bill_detail->id_product = $key;
        //     $bill_detail->quantity = $value['qty'];
        //     $bill_detail->unit_price = ($value['price']/$value['qty']);
        //     $bill_detail->save();
        // }
        foreach ($cart->items as $key => $value) {
            $bill_detail = new Chitietdonhang;
            $bill_detail->id_donhang = $bill->id;
            $bill_detail->id_sanpham = $key;
            $bill_detail->soluong = $value['qty'];
            $bill_detail->gia = ($value['price']/$value['qty']);
            $bill_detail->save();
        }

        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
    }

    //login
    public function getLogin(){
        return view('page.dangnhap');
    }
    //signup
    public function getSignin(){
        return view('page.dangki');
    }
    //post - signup
    public function postSignin(Request $req){
        $this->validate($req,
            [
                'email'     => 'required|email|unique:users,email',
                'password'  => 'required|min:6|max:14',
                'fullname'  => 'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required' => 'Nhập email hộ tao cái -_-',
                'email.email'   => 'Nhập email cho đúng đê thằng kia',
                'email.unique'  => 'M ăn cắp email của người ta hả thằng kia. Bị trùng rồi kìa...',
                'password.required'  => 'Ơ cái thằng này, mày tạo acc mà mày định không nhập password hả ?',
                'password.min'  => 'Mật khẩu tối thiểu 6 ký tự đó thằng ngu.',
                'password.max'  => 'Mật khẩu tối đa 14 ký tự đó thằng óc chó.',
                're_password.same'  => 'Nhập lại cho đúng password đê thằng kia. Nhập có cái pass mà cũng để sai...!'
            ]
        );
        //tiến hành save info vào trong DB
        $user = new User();
        //lấy info để save
        //'full_name' là tên của field trong table users...   Còn 'fullname' là name của field đó bên dangki.blade.php
        
        // $user->full_name = $req->fullname;
        // $user->email = $req->email;
        // $user->password = Hash::make($req->password);
        // $user->phone = $req->phone;
        // $user->address = $req->address;

        $user->ten = $req->fullname;
        $user->gioitinh = $req->gender;
        $user->email = $req->email;
        $user->matkhau = Hash::make($req->password);
        $user->diachi = $req->address;
        $user->sodienthoai = $req->phone;
        $user->save();
        return redirect()->back()->with('thanhcong','Đã tạo tài khoản thành công');
    }
    //post - login
    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:14'
            ],
            [
                'email.required'=> 'Nhập email hộ tao cái -_-',
                'email.email'   => 'Nhập email cho đúng đê thằng kia',
                'password.required' => 'Nhập sai password rồi kìa thằng điên.',
                'password.min'      => 'Password có tối thiểu 6 ký tự.',
                'password.max'      => 'Password có tối đa 14 ký tự.'
            ]
        );
        //tiến hành lấy info và so sánh với data có trong DB của mình.
        //'email' sau là cái name của field mà user nhập.
        $credentials = array('email'=>$req->email, 'password'=>$req->password);
        if(Auth::attempt($credentials)){
            return redirect()->back()->with(['flag'=>'success', 'message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger', 'message'=>'Đăng nhập không thành công']);
        }
    }
    //post - logout
    public function postLogout(){
        Auth::logout();
        return redirect()->route('trangchu');
    }
    //search - theo tên or theo giá
    public function getSearch(Request $req){
        //sử dụng toán tử nối chuỗi để nó nối 2 cái '%' này lại.
        $product = Sanpham::where('ten','like','%'.$req->key.'%')
                            ->orWhere('gia',$req->key)
                            // ->get();
                            ->paginate(8);
        return view('page.search', compact('product'));
    }
}
