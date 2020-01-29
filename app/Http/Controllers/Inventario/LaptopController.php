<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Procesador;
use App\Models\Marca;
use App\Models\Ram;
use App\Models\HardDrive;
use App\Models\Laptop;
use App\Http\Requests\LaptopCreateRequest;
use App\Http\Requests\LaptopUpdateRequest;
use DB;


class LaptopController extends Controller
{
    public function index(){
        $laptops = DB::  table('laptop as l')
                        ->join('marca as m','l.fk_marca','=','m.id')
                        ->join('procesador as p', 'l.fk_procesador','=', 'p.id')
                        ->join('ram as r', 'l.fk_ram','=', 'r.id')
                        ->join('hd as h', 'l.fk_hd','=','h.id')
                        ->select(
                                    'l.id',
                                    'l.No',
                                    'm.marca as marca',
                                    'l.modelo_laptop as modelo',
                                    'p.procesador as procesador',
                                    'l.modelo_procesador as procesador_modelo',
                                    'h.capacidad as hdd',
                                    'r.capacidad as ram',
                                    'l.notas as notas',
                                    'l.ranking as ranking',
                                    'l.estado'
                                )
                        ->orderBy('l.No', 'asc')
                        ->get();

        return view('pages.laptops.view',compact('laptops'));
    }

    public function create(){
        $marcas = Marca::all()->where('estado','=',1);
        $procesadores = Procesador::all()->where('estado','=',1);
        $ram = Ram::all()->where('estado','=',1);
        $HardDrive = HardDrive::all()->where('estado','=',1);
        
        return view('pages.laptops.create', compact('procesadores', 'marcas','ram','HardDrive'));
    }

    public function store(LaptopCreateRequest $request){
        Laptop::create([
            'No'                    =>      $request->No,
            'fk_marca'              =>      $request->fk_marca,
            'modelo_laptop'         =>      ($request->modelo_laptop == null) ? 'N/A':$request->modelo_laptop,
            'fk_procesador'         =>      $request->fk_procesador,
            'modelo_procesador'     =>      ($request->modelo_procesador == null) ? 'N/A':$request->modelo_procesador,
            'velocidad_procesador'  =>      ($request->velocidad_procesador == null) ? 'N/A':$request->velocidad_procesador,
            'fk_ram'                =>      $request->fk_ram,
            'fk_hd'                 =>      $request->fk_hd,
            'ranking'               =>      $request->ranking,
            'notas'                 =>      ($request->notas == null) ? 'N/A':$request->notas
        ]);

        return redirect()->route('laptops');
    }

    public function show($id)
    {
        $laptop = DB::table('laptop as l')
                  ->where('l.id','=',$id)
                  ->join('marca as m', 'm.id','=', 'l.fk_marca')
                  ->join('procesador as p', 'p.id','=', 'l.fk_procesador')
                  ->join('hd', 'hd.id','=', 'l.fk_hd')
                  ->join('ram', 'ram.id','=', 'l.fk_ram')
                  ->select('l.No', 'm.marca', 'l.modelo_laptop', 'p.procesador', 'l.modelo_procesador', 'hd.capacidad as hd', 'ram.capacidad as ram', 'l.ranking', 'l.notas')
                  ->first();

        // dd($laptop);
        return view('pages.laptops.show', compact('laptop'));
    }

    public function edit($id)
    {
        $laptop = Laptop::findOrFail($id);
        $marcas = Marca::all()->where('estado','=',1);
        $procesadores = Procesador::all()->where('estado','=',1);
        $ram = Ram::all()->where('estado','=',1);
        $HardDrive = HardDrive::all()->where('estado','=',1);

        return view('pages.laptops.edit', compact('laptop','procesadores', 'marcas','ram','HardDrive'));
    }

    public function update(LaptopUpdateRequest $request, $id)
    {

        DB::table('laptop')
            ->where('id', $id)
            ->update([
                'No'                    =>      $request->No,
                'fk_marca'              =>      $request->fk_marca,
                'modelo_laptop'         =>      ($request->modelo_laptop == null) ? 'N/A':$request->modelo_laptop,
                'fk_procesador'         =>      $request->fk_procesador,
                'modelo_procesador'     =>      ($request->modelo_procesador == null) ? 'N/A':$request->modelo_procesador,
                'velocidad_procesador'  =>      ($request->velocidad_procesador == null) ? 'N/A':$request->velocidad_procesador,
                'fk_ram'                =>      $request->fk_ram,
                'fk_hd'                 =>      $request->fk_hd,
                'ranking'               =>      $request->ranking,
                'notas'                 =>      ($request->notas == null) ? 'N/A':$request->notas
        ]);

        return redirect()->route('laptops');
    }

    public function destroy($id)
    {
        //
    }
}
