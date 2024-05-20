<?php

namespace App\Livewire;

use App\Models\Delegacion;
use App\Models\Genero;
use App\Models\Region;
use App\Models\Secretaria;
use App\Models\TipoDelegacion;
use Livewire\Component;

class RegionDelegacion extends Component
{
    public $tipo_delegaciones = null; #Listamos el tipo de delegación (Activos, Jubilado o Centro de trabajo)
    public $select_tipo_delegacion = null;
    
    public $regiones = null; #Listado regiones
    public $select_region = null;

    public $delegaciones = []; #Listado delegaciones [] por el momento vacias
    public $select_delegacion = null;


    public $secretarias = []; #Listado secretarias
    public $select_secretaria = null;

    public $genero = null;


    public function mount()
    {
        $this->tipo_delegaciones = TipoDelegacion::pluck('tipo','id'); #inicializamos el tipo de delegación (activo, jubilado o ct)
        $this->regiones = Region::all(); #Inicializamos todas las regiones

        $this->delegaciones = collect(); #Inicializamos la coleccion vacia

        
        $this->secretarias = collect();

        $this->genero = Genero::pluck('genero','id');

    }
    public function render()
    {
        return view('livewire.region-delegacion');
    }
    
    public function updatedSelectRegion($value)
    {
        $this->delegaciones = Delegacion::where('id_region',$value)
            ->where('id_tipo_delegacion', $this->select_tipo_delegacion)
            ->orderBy('id_nomenclatura')
            ->orderBy('num_delegaciona')
            ->get();
        $this->select_delegacion = optional($this->delegaciones->first())->id;


        $this->secretarias = Secretaria::where('id_nomenclatura',$this->select_tipo_delegacion)->get();
        $this->select_secretaria = optional($this->secretarias->first())->id;




        // dd($this->select_tipo_delegacion);


    }
}
