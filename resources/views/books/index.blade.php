@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?= link_to('books/create', $title = ' เพิ่มข้อมูล', ['class' => 'btn btn-primary fa fa-plus'], $secure = null); ?>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">แสดงข้อมูลหนังสือ จำนวนทั้ง หมด {{ $books->total() }} เล่ม</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รหัส</th>
                            <th>ชื่อหนังสือ</th>
                            <th>ราคา</th>
                            <th>หมวดหนังสือ</th>
                            <th>รูปภาพ</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ number_format($book->price,2) }}</td>
                            <td>{{ $book->typebooks->name }}</td>
                            <td>
                                <a href="{{ asset('images/'.$book->image)
                                   }}" data-lity><img src="{{ asset('images/resize/'.$book->image) }}" class="img-thumbnail"  width="120" height="100"></a>
                            </td>
                            <td>
                                <a href="{{ url('/books/' . $book->id . '/edit') }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
<!--                                <a href="{{ url('/books/'.$book->id.'/destroy') }}"><i class="fa fa-trash"></i></a>-->
                            </td>
                            <td>
                                {!! Form::open(array('url' => 'books/'. $book->id, 'method'=>'delete')) !!}
                                {!! Form::submit(' ลบ',  ['class' => 'btn btn-danger btn-xs  fa fa-trash']) !!}
                                {!! Form::close(); !!}
                            </td>
                        </tr>                       
                        @endforeach
                    </table>
                    <br>
                    {!! $books->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

