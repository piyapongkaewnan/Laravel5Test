@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?= link_to('typebooks/create', $title = ' เพิ่มข้อมูล', ['class' => 'btn btn-primary fa fa-plus'], $secure = null); ?>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">แสดงข้อมูลประเภทหนังสือ [ทั้งหมด {{ $count }} รายการ]
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <th width="10%">รหัส</th>
                            <th width="76%">ประเภทหนังสือ</th>
                            <th width="7%">แก้ไข</th>
                            <th width="7%">ลบ</th>
                        </tr>
                        @foreach ($typebooks as $typebook)
                        <tr>
                            <td>{{ $typebook->id }}</td>
                            <td>{{ $typebook->name }}</td>
                            <td><a href="{{
                                url('/typebooks/'.$typebook->id .'/edit') }}"><i class="fa fa-edit btn btn-primary btn-xs"></i></a>
<!--                                &nbsp;&nbsp;<a href="{{ url('/typebooks/destroy/'.$typebook->id) }}"><i class="fa fa-trash btn btn-danger btn-xs"></i></a>-->
                            </td>
                            <td>
                                {!! Form::open(array('url' => 'typebooks/'. $typebook->id, 'method'=>'delete')) !!}
                                {!! Form::submit(' ลบ',  ['class' => 'btn btn-danger btn-xs  fa fa-trash']) !!}
                                {!! Form::close(); !!}
                            </td>
                        </tr>
                        @endforeach
                        <tr><td colspan="3"> {!! $typebooks->render() !!}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection