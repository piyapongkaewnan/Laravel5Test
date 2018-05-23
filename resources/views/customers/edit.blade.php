@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">เพิ่มข้อมูลลูกค้า</div>
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
                    {!! Form::model($customers, array('url' => 'customers/' . $customers->id , 'method' => 'put')) !!}
                    <div class="col-xs-8">
                        <div class="form-group">
                            {!! Form::label('cust_name','ชื่อลูกค้า') !!}
                            {!! Form::text('cust_name', null, ['class' => 'form-control','placeholder' => 'ชื่อลูกค้า']) !!}
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="form-group">
                            {!! Form::label('cust_email','E-mail') !!}
                            {!! Form::email('cust_email', null, ['class' => 'form-control','placeholder' => 'E-Mail ลูกค้า']) !!}
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="form-group">
                            {!! Form::label('cust_birthdate','วันเกิด') !!}
                            {!! Form::date('cust_birthdate', null, ['class' => 'form-control','placeholder' => 'วันเกิดลูกค้า']) !!}
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="form-group">
                            {!! Form::label('cust_address','ที่อยู่') !!}
                            {!! Form::textarea('cust_address', null, ['class' => 'form-control','placeholder' => 'ที่อยู่ ลูกค้า','rows'=>'4']) !!}
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="form-group">
                            {!! Form::label('cust_phone','เบอร์โทรลูกค้า') !!}
                            {!! Form::text('cust_phone', null, ['class' => 'form-control','placeholder' => 'เบอร์โทรลูกค้า']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">                                
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

