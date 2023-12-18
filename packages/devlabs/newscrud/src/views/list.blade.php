@extends('devlabs.newscrud.app')
@section('content')
    @if (isset($news))
        <h3>Edit : </h3>
        {!! Form::model($news, ['route' => ['news.update', $news->id], 'method' => 'patch']) !!}
    @else
        <h3>Add New news : </h3>
        {!! Form::open(['route' => 'news.store']) !!}
    @endif
    <div class="form-inline">
        <div class="form-group">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit($submit, ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}
    <hr>
    <h4>news : </h4>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $new)
                <tr>
                    <td>{{ $new->title_en }}</td>
                    <td>
                        {!! Form::open(['route' => ['new.destroy', $new->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('new.edit', [$new->id]) !!}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
