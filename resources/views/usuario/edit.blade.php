@extends('layouts.admin')

@section('encabezado')
Actualizar Usuario
@endsection

@section('contenido')
<div class="container">    
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Ingrese Tus Datos</div>
                        </div>  
                        <div class="panel-body" >

                        {{-- INICIO FORMULARIO DE REGISTRO --}}        

                            {!!Form::open(array('action' => ['UsuarioController@update','id'=>$user->id],'autocomplete'=>'off','class' => 'form-horizontal',
                                'id'=>"signupform",'role'=>"form"
                            ))    !!}
                        {{Form::token()}}
                        {{ method_field('PUT') }}
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-3 control-label">Nombre Completo</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{ $user->name}}" placeholder="Nombre Completo" required>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-3 control-label">Correo Electrónico</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email" required autofocus>
                                    </div>
                                </div>
                                    
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-3 control-label">Contraseña</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required="">
                                    </div>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-3 control-label">Confirmar Contraseña</label>
                                    <div class="col-md-9">
                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation"  placeholder="Confirmar Contraseña">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info btn-block"><i class="icon-hand-right"></i> Actualizar</button>
                                    </div>
                                </div>
                                
                                
                        {!!Form::close()!!}                        
                         </div>
                    </div>
         </div> 
    </div>
    
@endsection