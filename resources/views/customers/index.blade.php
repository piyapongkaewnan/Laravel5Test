@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?= link_to('customers/create', $title = ' เพิ่มข้อมูล', ['class' => 'btn btn-primary fa fa-plus'], $secure = null); ?>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">แสดงข้อมูลลูกค้า <span class="small text-success"> (ทั้งหมด {{ $count }} รายการ)</span>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <th width="10%">รหัส</th>
                            <th width="30%">ชื่อ</th>
                            <th width="30%">E-Mail</th>
                            <th width="16%">Phone Number</th>
                            <th width="7%">แก้ไข</th>
                            <th width="7%">ลบ</th>
                        </tr>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->cust_name }}</td>
                            <td>{{ $customer->cust_email }}</td>
                            <td>{{ $customer->cust_phone }}</td>
                            <td><a href="{{
                                url('/customers/'.$customer->id .'/edit') }}"><i class="fa fa-edit btn btn-primary btn-xs"></i></a>
<!--                                &nbsp;&nbsp;<a href="{{ url('/customers/destroy/'.$customer->id) }}"><i class="fa fa-trash btn btn-danger btn-xs"></i></a>-->
                            </td>
                            <td>
                                {!! Form::open(array('url' => 'customers/'. $customer->id, 'method'=>'delete')) !!}
                                {!! Form::submit(' ลบ',  ['class' => 'btn btn-danger btn-xs  fa fa-trash']) !!}
                                {!! Form::close(); !!}
                            </td>
                        </tr>
                        @endforeach
                        <tr><td colspan="6"> {!! $customers->render() !!}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection