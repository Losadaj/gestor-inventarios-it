@extends('layouts.master')@section('content')    @php        $route='roles';        $titulo='Roles';    @endphp    <h1>@lang('fo.'.$titulo) <a href="{{ url($route.'/create') }}" class="btn btn-primary pull-right btn-sm">@lang('form.addnew') @lang('fo.Rol')</a></h1>    <div class="table">        <table class="table table-bordered table-striped table-hover">            <thead>            <tr>                <th>@lang('form.sno')</th><th>Rol</th><th>@lang('fo.descripcion')</th><th>@lang('fo.Actions')</th>            </tr>            </thead>            <tbody>            @php $x=0; @endphp            @foreach($rol as $item)                @php $x++;@endphp                <tr>                    <td>{{ $x }}</td>                    <td><a href="{{ url($route, $item->id) }}">{{ $item->rol }}</a></td>                    <td>{{ $item->descripcion }}</td>                    <td>                        <a href="{{ url($route.'/' . $item->id . '/edit') }}">                            <button type="submit" class="btn btn-primary btn-xs">@lang('form.update')</button>                        </a> /                        {!! Form::open([                            'method'=>'DELETE',                            'url' => [$route, $item->id],                            'style' => 'display:inline'                        ]) !!}                        {!! Form::submit(trans('form.deletee'), ['class' => 'btn btn-danger btn-xs']) !!}                        {!! Form::close() !!}                    </td>                </tr>            @endforeach            </tbody>        </table>        <div class="pagination"> {!! $rol->render() !!} </div>    </div>@endsection