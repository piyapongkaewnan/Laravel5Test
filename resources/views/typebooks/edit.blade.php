@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">แสดงข้อมูลประเภทหนังสือ
                </div>
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
                    {!! Form::model($typebooks , array('url' => 'typebooks/' . $typebooks->id , 'method' => 'put')) !!}
                    <div class="col-xs-8">
                        <div class="form-group">
                            {!! Form::label('name','ชื่อหมวดหนังสือ') !!}
                            {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'ชื่อหมวดหนังสือ']) !!}                            
                        </div>
                    </div>

                    <div class="col-xs-8">
                            <div class="form-group">                                                      
                                    {!! Form::submit('บันทึก',  ['class' => 'btn btn-primary']) !!}
                                    <?= link_to('typebooks', $title = ' กลับ', ['class' => 'btn btn-warning fa fa-back'], $secure = null); ?>                        
                            </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection