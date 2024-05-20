<?php

namespace App\Livewire;

use App\Models\Delegacion;
use App\Models\Nomenclatura;
use App\Models\TipoDelegacion;
use Livewire\Component;

class SelectorDelegacion extends Component
{
    public $tipoDelegaciones;
    public $nomenclaturas = [];
    public $TipoDelegacionId;
    public $id_nomenclatura;

    public $NumDelegacional;
    public $NivelDelegacional;

    // Nueva propiedad para indicar si estamos en modo edición
    // Por lo que el componente limeware estara en la vista edit.blade.php
    public $modoEdicion;

    public function mount($delegacion = null, $modoEdicion = true)
    {
        // $delegacion = Delegacion::find('id');
        // $this->tipoDelegaciones = TipoDelegacion::pluck();
        $this->tipoDelegaciones = TipoDelegacion::pluck('tipo','id')->toArray();
        $this->nomenclaturas = collect();

        // Asigna el valor basado en old('nivel_delegacional') o $delegacion->nivel_delegacional
        // $this->NumDelegacional = old('num_delegacional') ?? $delegacion->num_delegaciona;
        $this->NumDelegacional = old('num_delegacional') ?? optional($delegacion)->num_delegaciona;
        $this->NivelDelegacional = old('nivel_delegacional') ?? optional($delegacion)->nivel_delegaciona;
        
        $this->modoEdicion = $modoEdicion;

    }


    public function render()
    {
        return view('livewire.selector-delegacion');
    }

    public function updatedTipoDelegacionId($value)
    {
        // $this->nomenclaturas = Nomenclatura::where('id_tipo_delegacion',$value)->get()->toArray();
        
        $this->nomenclaturas = Nomenclatura::where('id_tipo_delegacion',$value)->get();
        $this->id_nomenclatura = $this->nomenclaturas->first()->id ?? null;

        // $this->nomenclaturas = Nomenclatura::where('id_tipo_delegacion', $value)->get()->toArray();
        // $this->id_nomenclatura = (count($this->nomenclaturas) > 0) ? $this->nomenclaturas[0]['id'] : null;
        
        // $this->nomenclaturas = Nomenclatura::where('id_tipo_delegacion', $value)->get()->toArray();
        // $this->id_nomenclatura = (count($this->nomenclaturas) > 0) ? array_merge(['' => 'Selecciona'], $this->nomenclaturas) : null;
        



    }   

}
