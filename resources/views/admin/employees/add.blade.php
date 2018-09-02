@extends('admin.layouts.admin')

@section('title',"Add an Employee", "Employee") 

@section('content')
<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    {!! Form::open(array('route' => 'admin.employees.store')) !!}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            {{-- <label for="inputName">Name</label> --}}
            {!! Form::label('avator', 'Avator') !!}
            {{-- <input type="text" class="form-control" id="inputName" name="name" placeholder=""> --}}
            {!! Form::file('avator', null, ['class' => 'form-control-file']) !!}
        </div>
        <div class="form-group">
            {{-- <label for="inputName">Name</label> --}}
            {!! Form::label('name', 'Name') !!}
            {{-- <input type="text" class="form-control" id="inputName" name="name" placeholder=""> --}}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nic', 'NIC') !!}
            {!! Form::text('nic',  null, ['class' => 'form-control', 'placeholder'=>'Without V']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('employeeType', 'Employee Type') !!}
            {!! Form::select('employeeType', ['Director' => 'Director', 'Receptionist' => 'Receptionist', 'PNO'=> 'PNO'], null, ['placeholder' => 'Choose...', 'class'=> 'form-control']) !!}
            {{-- <select id="inputEmployeeType" class="form-control">
                <option selected>Choose...</option>
                <option>Director</option>
                <option>Receptionist</option>
                <option>PNO</option>
            </select> --}}
        </div>
        <div class="container">
                <div class="form-group">
                    {!! Form::label('birthday', 'Birthday') !!}
                    {!! Form::date('birthday', null, ['class'=> 'form-control']) !!}
                    {{-- <div class='input-group date' id='inputBirthday'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div> --}}
                </div>
            </div>
        <div class="form-group">
         {!! Form::label('address', 'Address') !!}
         {!! Form::textarea('address', null, ['class'=> 'form-control']) !!}
          {{-- <textarea class="form-control" name="address" id="address" cols="30" rows="10"></textarea> --}}
        </div>
        <a href="{{ URL::previous() }}" class="btn btn-light"><i class="fa fa-arrow-left"></i> Go Back</a>
        {!! Form::button('Clear', ['type' => 'reset', 'class' => 'btn btn-danger']) !!}
        {!! Form::button('Add', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
        {{-- <button type="submit" class="btn btn-primary">Add</button> --}}
      {!! Form::close() !!}
    </div>
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/users/edit.css')) }}
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/users/edit.js')) }}
@endsection