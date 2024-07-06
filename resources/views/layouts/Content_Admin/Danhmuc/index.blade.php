@extends('home')
<!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->

@section('contentadmin')
<div class="details">
    <div class="danhsach">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Danh sách danh mục</h2>
                <!-- <a href="#" class="btn">View All</a> -->
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="text-align: left; padding-left: 10px;">Tên danh mục</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Điều khiển</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $key => $cate)
                    <tr>
                        <th scope="row">{{$key}}</th>
                        <td style="text-align: left; padding-left: 10px;">{{$cate -> tendanhmuc}}</td>
                        <td>{{$cate -> slug}}</td>
                        <td style="text-align: center;">
                            @if ($cate -> trangthai)
                            <span class="status delivered">Hiển thị</span>
                            @else
                            <span class="status return">Ẩn</span>
                            @endif
                        </td>
                        <td style="width: 250px;">
                            <div>
                                <div
                                    style="grid-template-columns: 0.25fr 0.25fr; display: grid; justify-content: center; justify-items: center;">
                                    <a href="{{ route('danhmuc.edit', $cate -> id) }}" class="btn btn-warning"
                                        style="width: 50px; border: 1px solid #f7b500; background-color: #f7b500;">Sửa</a>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['danhmuc.destroy', $cate -> id],
                                    'onsubmit'
                                    => 'return confirm("Bạn muốn xóa?")']) !!}
                                    <div class="btn-group pull-right" style="margin-right: 5px;">
                                        {!! Form::submit('Xóa', ['class' => 'btn btn-danger', 'style' => 'border: 1px
                                        solid #d32424; background-color: #d32424;']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                    <!-- <a href="{{ route('danhmuc.edit', $cate -> id) }}" class="btn btn-warning"
                                    style="width: 50px;">Sửa</a> -->
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

    <!-- ================= New Customers ================ -->
    <div class="fromadd_danhmuc">
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Thêm danh mục</h2>
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                @if (!isset($danhmuc))
                {!! Form::open(['method' => 'POST', 'route' => 'danhmuc.store']) !!}
                @else
                {!! Form::open(['method' => 'PUT', 'route' => ['danhmuc.update', $danhmuc -> id]]) !!}
                @endif

                <div class="form-froup">
                    {!! Form::label('tendanhmuc', 'Tên danh mục', []) !!}
                    {!! Form::text('tendanhmuc', isset($danhmuc) ? $danhmuc -> title : '', ['class' => 'form-control',
                    'placeholder' => 'Nhập tên danh mục...', 'id' => 'slug', 'onkeyup' => 'ChangeToSlug()']) !!}
                </div>
                <div class="form-froup">
                    {!! Form::label('slug', 'Slug', []) !!}
                    {!! Form::text('slug', isset($danhmuc) ? $danhmuc -> slug : '', ['class' => 'form-control',
                    'placeholder' => ' ', 'id' => 'convert_slug']) !!}
                </div>
                <!-- <div class="form-froup">
                {!! Form::label('description', 'Description', []) !!}
                {!! Form::textarea('description', isset($category) ? $category -> description : '', ['style' =>
                'resize:none','class' => 'form-control', 'placeholder' => 'Nhập vào dữ liệu...', 'id' =>
                'description']) !!}
            </div> -->
                <div class="form-froup">
                    {!! Form::label('trangthai', 'Trạng thái', []) !!}
                    {!! Form::select('trangthai', ['1' => 'Hiện thị', '0' => 'Ẩn'], isset($danhmuc) ? $danhmuc ->
                    status : '', ['class' => 'form-control']) !!}
                </div>
                <br>
                <div style="display: flex; justify-content: center;">
                    @if (!isset($danhmuc))
                    {!! Form::submit('Thêm danh mục', ['class' => 'btn btn-success']) !!}
                    @else
                    {!! Form::submit('Cập nhật', ['class' => 'btn btn-success']) !!}
                    @endif
                    {!! Form::close() !!}
                </div>


            </div>

        </div>
    </div>
</div>
<!-- <div class="container">
    <div class=" justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Thêm danh mục</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (!isset($category))
                    {!! Form::open(['method' => 'POST', 'route' => 'danhmuc.store']) !!}
                    @else
                    {!! Form::open(['method' => 'PUT', 'route' => ['danhmuc.update', $category -> id]]) !!}
                    @endif

                    <div class="form-froup">
                        {!! Form::label('title', 'Title', []) !!}
                        {!! Form::text('title', isset($category) ? $category -> title : '', ['class' => 'form-control',
                        'placeholder' => 'Nhập vào dữ liệu...', 'id' => 'slug', 'onkeyup' => 'ChangeToSlug()']) !!}
                    </div>
                    <div class="form-froup">
                        {!! Form::label('slug', 'Slug', []) !!}
                        {!! Form::text('slug', isset($category) ? $category -> slug : '', ['class' => 'form-control',
                        'placeholder' => 'Nhập vào dữ liệu...', 'id' => 'convert_slug']) !!}
                    </div>
                    <div class="form-froup">
                        {!! Form::label('description', 'Description', []) !!}
                        {!! Form::textarea('description', isset($category) ? $category -> description : '', ['style' =>
                        'resize:none','class' => 'form-control', 'placeholder' => 'Nhập vào dữ liệu...', 'id' =>
                        'description']) !!}
                    </div>
                    <div class="form-froup">
                        {!! Form::label('active', 'Active', []) !!}
                        {!! Form::select('status', ['1' => 'Hiện thị', '0' => 'Ẩn'], isset($category) ? $category ->
                        status : '', ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    @if (!isset($category))
                    {!! Form::submit('Thêm dữ liệu', ['class' => 'btn btn-success']) !!}
                    @else
                    {!! Form::submit('Cập nhật', ['class' => 'btn btn-success']) !!}
                    @endif
                    {!! Form::close() !!}


                </div>
            </div>
            <br>


        </div>
    </div>
</div> -->

@endsection