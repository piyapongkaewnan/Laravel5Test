@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">เพิ่มข้อมูลหนังสือ</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {!! Form::open(array('url' => 'books', 'files' => true)) !!}
                    <div class="col-xs-8">
                        <div class="form-group">
                            {!! Form::label('title','ชื่อหนังสือ') !!}
                            {!! Form::text('title', null, ['class' => 'form-control','placeholder' => 'ชื่อหนังสือ']) !!}
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::label('price','ราคา') !!}
                            {!! Form::number('price', null, ['class' => 'form-control','placeholder' => 'เช่น 100, 100.25']) !!}
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::label('typebooks_id','ประเภทหนังสือ') !!}
                            {!! Form::select('typebooks_id', App\TypeBooks::pluck('name','id') , null, ['class' => 'form-control','placeholder' => 'กรุณาเลือกประเภทหนังสือ']) !!}
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::label('image','รูปภาพ') !!}
                            {!! Form::file('image', null, ['class' => 'form-control btn btn-info']) !!}
                        </div>
                    </div>
                    <div class="col-xs-12">
                            <div class="form-group">                                                      
                                    {!! Form::submit('บันทึก',  ['class' => 'btn btn-primary']) !!}
                                    <?= link_to('customers', $title = ' กลับ', ['class' => 'btn btn-warning fa fa-back'], $secure = null); ?>                        
                            </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>        
</div>
@endsection

