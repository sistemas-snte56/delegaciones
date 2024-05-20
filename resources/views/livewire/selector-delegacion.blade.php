<div>
    <div class="row">
        <x-adminlte-select name="TipoDelegacionId" label="SELECCIONA EL TIPO DE DELEGACIÓN" fgroup-class="col-md-3"  wire:model.live="TipoDelegacionId">
            <x-adminlte-options :options="$tipoDelegaciones" empty-option="SELECCIONA TIPO" :select="old('TipoDelegacionId')" />
        </x-adminlte-select>

        <div class="col-md-3">
            <label for="nomenclatura" class="form-label">SELECCIONA LA NOMENCLATURA</label>
            <select name="nomenclatura" id="" class="form-control" wire:model="id_nomenclatura">
                @if ($nomenclaturas->count() == 0)
                    <option value="">SELECCIONA SU NOMENCLATURA</option>
                @endif
                @foreach ($nomenclaturas as $nomenclatura)
                    <option value=" {{$nomenclatura->id}} ">{{$nomenclatura->nomenclatura}}</option>
                @endforeach
            </select>
        </div>

        <x-adminlte-input name="num_delegacional" label="NUMERO DELEGACIONAL" placeholder="INGRESA NÚMERO"  type="number" fgroup-class="col-md-2" :value="$NumDelegacional"/>
        <x-adminlte-input name="nivel_delegacional" label="NIVEL EDUCATIVO DELEGACIONAL" placeholder="NIVEL"  type="text" fgroup-class="col-md-4" :value="$NivelDelegacional"/>
        
    </div>
</div>