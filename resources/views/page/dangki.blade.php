@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
            <form action="{{route('signin')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}"
				<div class="row"> 
                    <div class="col-sm-3"></div>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('thanhcong'))
                        <div class="alert alert-success"><h3>{{Session::get('thanhcong')}}</h3></div>
                    @endif
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>
						
						<div class="form-block">
							<label for="fullname">Fullname*</label>
							<input type="text" name="fullname" placeholder="Nguyễn Văn A" required>
						</div>

						<div class="form-block">
							<label>Giới tính </label>
							<input id="gender" type="radio" class="input-radio" name="gender" value="Nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
							<input id="gender" type="radio" class="input-radio" name="gender" value="Nữ" style="width: 10%"><span>Nữ</span>
										
						</div>

						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" name="email" placeholder="example@gmail.com" required>
						</div>
						
						<div class="form-block">
							<label for="address">Address*</label>
							<input type="text" name="address" placeholder="17B, C8 Street, Vĩnh Điềm Trung B, Nha Trang, Khánh Hòa" required>
						</div>

						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" placeholder="113" required>
						</div>

						<div class="form-block">
							<label for="password">Password*</label>
							<input type="password" name="password" placeholder="********" required>
						</div>
						<div class="form-block">
							<label for="re_password">Re password*</label>
							<input type="password" name="re_password" placeholder="********" required>
						</div>
						
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection
