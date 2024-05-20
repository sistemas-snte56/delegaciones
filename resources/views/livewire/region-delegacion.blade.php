<div class="row">
    <div class="form-group col-md-2">
        <label for="tipo_delegacion">SELECCIONA EL TIPO</label>
        <select name="select_tipo_delegacion" id="select_tipo_delegacion" class="form-control" wire:model="select_tipo_delegacion">
            <option value="">SELECCIONA...</option>
            @foreach ($tipo_delegaciones as $id => $tipo)
                <option value="{{$id}}">{{ $tipo }}</option>
            @endforeach
        </select>
        @error('select_tipo_delegacion') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror
    </div>
    
    <div class="form-group col-md-2">
        <label for="select_region">SELECCIONA REGIÓN</label>
        <select name="select_region" id="select_region" class="form-control" wire:model.live="select_region" >
            <option value="">SELECCIONA...</option>
            @foreach ($regiones as $region)
                <option value="{{$region->id}}"> {{$region->region}}&ensp;-&ensp;{{$region->sede}}  </option>
            @endforeach
        </select>
        @error('select_region') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <label for="select_delegacion">SELECCIONA DELEGACIÓN</label>
        <select name="select_delegacion" id="select_delegacion" class="form-control" wire:model="select_delegacion">
            <option value="">SELECCIONA...</option>
            @foreach($delegaciones as $delegacion)
                <option value="{{ $delegacion->id }}" @if (old('select_secretaria') ==  $id) selected @endif >
                    {{ $delegacion->nomenclatura->nomenclatura }}{{$delegacion->num_delegaciona}}&ensp;
                    {{ $delegacion->nivel_delegaciona }} &ensp;
                    {{$delegacion->sede_delegaciona}}
                </option>
            @endforeach            
        </select>
        @error('select_delegacion') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror        
    </div>

    <div class="form-group col-md-4">
        <label for="select_secretaria">SELECCIONA CARTERA</label>
        <select name="select_secretaria" id="select_secretaria" class="form-control" wire:model="select_secretaria">
            <option value="">SELECCIONA...</option>
            @foreach ($secretarias as $secretaria)
                <option value="{{$secretaria->id}}" @if (old('select_secretaria') ==  $id) selected @endif> {{$secretaria->cartera_secretaria}}  </option>
            @endforeach
        </select>
        @error('select_secretaria') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror          
    </div>

    <div class="form-group col-md-2">
        <label for="titulo">TITULO</label>
        <select name="select_titulo" id="select_titulo" class="form-control">
            <option value="">SELECIONA...</option>
            <option value="PROF.">PROF.</option>
            <option value="PROFA.">PROFA.</option>
            <option value="C.">C.</option>
        </select>
        @error('select_titulo') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror         
    </div>

    <div class="form-group col-md-3">
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre" id="nombre"  class="form-control" placeholder="NOMBRE COMPLETO" value="{{ old('nombre') }}">
        @error('nombre') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror     </div>

    <div class="form-group col-md-3">
        <label for="apaterno">APELLIDO PATERNO</label>
        <input type="text" name="apaterno" id="apaterno" class="form-control" placeholder="PRIMER APELLIDO" value="{{ old('apaterno') }}">
        @error('apaterno') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror     
    </div>

    <div class="form-group col-md-3">
        <label for="amterno">APELLIDO MATERNO</label>
        <input type="text" name="amterno" id="amterno" class="form-control" placeholder="SEGUNDO APELLIDO" value="{{ old('amterno') }}">
    </div>

    <div class="form-group col-md-1">
        <label for="select_genero">GENERO</label>
        <select name="select_genero" id="select_genero" class="form-control">
            <option value="">SELECIONA...</option>
            @foreach ($genero as $id => $item)
                <option value="{{$id}}" @if (old('select_genero') == $id) selected @endif> {{$item}} </option>
            @endforeach
        </select>
        @error('select_genero') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror  
    </div>

    <div class="form-group col-md-2">
        <label for="email">CORREO</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="EMAIL" value="{{ old('email') }}">
        @error('email') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror          
    </div>

    <div class="form-group col-md-2">
        <label for="telefono">TELÉFONO</label>
        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="MOVIL"value="{{ old('telefono') }}" >
        @error('telefono') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror          
    </div>

    <div class="form-group col-md-6">
        <label for="direccion">DIRECCIÓN</label>
        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="CALLE Y NÚMERO INTERIOR O EXTERIOR" value="{{ old('direccion') }}">
        @error('direccion') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror          
    </div>
    
    <div class="form-group col-md-2">
        <label for="cp">CÓDIGO POSTAL</label>
        <input type="text" name="cp" id="cp" class="form-control" placeholder="C.P."  value="{{ old('cp') }}">
        @error('cp') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror          
    </div>

    <div class="form-group col-md-4">
        <label for="ciudad">CIUDAD</label>
        <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="CIUDAD" value="{{ old('ciudad') }}" >
        @error('ciudad') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror          
    </div>

    <div class="form-group col-md-4">
        <label for="estado">ESTADO</label>
        <input type="text" name="estado" id="estado" class="form-control" placeholder="ESTADO"  value="{{ old('estado') }}">
        @error('estado') 
            <p style="font-size:14px; color:#ff0000"><strong><em>{{ $message }}</em></strong></p>
        @enderror          
    </div>

    <div class="form-group col-md-12">
        <label for=""> &nbsp; </label>
        <button class="btn btn-primary  float-right" type="submit">
            <i class="fas fa-lg fa-fw fa-save"></i> Guardar
        </button>
    </div>

</div>