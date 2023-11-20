@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <span></span>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        div::-webkit-scrollbar{
            width: 5px;

        }
        
        div::-webkit-scrollbar-track{
            background: #ddd;
        }
        div::-webkit-scrollbar-thumb{
            background: #999;
        }

        .trim{
            display: flex; flex-wrap:wrap; align-items:flex-start; justify-content:space-evenly;
        }
    </style>
@stop

@section('content')
<h5 class="w-100">Oferta Academica</h5>

<main style="display: flex; flex-wrap:wrap; align-items:flex-start; justify-content:space-evenly">
    @foreach ($pnf as $oa)

    @if ($oa->malla_tipo == 'trimestral')
    <form action="{{route('coordinador.oferta.store')}}" class="w-100 trim" method="POST">
        @csrf
        <div class="card pb-4" style="width: 31rem;">
            <div class="card-header mb-0">
                    <h5>{{$oa->pnf_name}} Trayecto I</h5>                
            </div>
                <div class="card-body" style="max-height:80vh; overflow:auto;">
                        <table class="table" style="font-size: 13px;">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">Codigo</th>
                                    <th>Unidad Curricular</th>    
                                    <th>Modalidad</th>
                                    <th>UC</th>
                                </tr>                            
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th>Trimestre I</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_i != '' && $trim->trayecto == 'i' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="1"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach

                                <tr>
                                    <th></th>
                                    <th>Trimestre II</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_ii != '' && $trim->trayecto == 'i' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="2"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach

                                <tr>
                                    <th></th>
                                    <th>Trimestre III</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_iii != '' && $trim->trayecto == 'i' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="3"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                </div>
        </div>

        <div class="card pb-4" style="width: 31rem;">
            <div class="card-header">
                    <h5>{{$oa->pnf_name}} Trayecto II</h5>                
            </div>
                <div class="card-body" style="max-height:80vh; overflow:auto;">
                        <table class="table" style="font-size: 13px;">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">Codigo</th>
                                    <th>Unidad Curricular</th>    
                                    <th>Modalidad</th>
                                    <th>UC</th>
                                </tr>                            
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th>Trimestre I</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_i != '' && $trim->trayecto == 'ii' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="1"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach

                                <tr>
                                    <th></th>
                                    <th>Trimestre II</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_ii != '' && $trim->trayecto == 'ii' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="2"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach

                                <tr>
                                    <th></th>
                                    <th>Trimestre III</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_iii != '' && $trim->trayecto == 'ii' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="3"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                </div>
        </div>

        <div class="card pb-4" style="width: 31rem;">
            <div class="card-header">
                    <h5>{{$oa->pnf_name}} Trayecto III</h5>                
            </div>
                <div class="card-body" style="max-height:80vh; overflow:auto;">
                        <table class="table" style="font-size: 13px;">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">Codigo</th>
                                    <th>Unidad Curricular</th>    
                                    <th>Modalidad</th>
                                    <th>UC</th>
                                </tr>                            
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th>Trimestre I</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_i != '' && $trim->trayecto == 'iii' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="1"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach

                                <tr>
                                    <th></th>
                                    <th>Trimestre II</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_ii != '' && $trim->trayecto == 'iii' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="2"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach

                                <tr>
                                    <th></th>
                                    <th>Trimestre III</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_iii != '' && $trim->trayecto == 'iii' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="3"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                </div>
        </div>

        <div class="card pb-4" style="width: 31rem;">
            <div class="card-header">
                    <h5>{{$oa->pnf_name}} Trayecto IV</h5>                
            </div>
                <div class="card-body" style="max-height:80vh; overflow:auto;">
                        <table class="table" style="font-size: 13px;">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">Codigo</th>
                                    <th>Unidad Curricular</th>    
                                    <th>Modalidad</th>
                                    <th>UC</th>
                                </tr>                            
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th>Trimestre I</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_i != '' && $trim->trayecto == 'iv' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="1"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach

                                <tr>
                                    <th></th>
                                    <th>Trimestre II</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_ii != '' && $trim->trayecto == 'iv' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="2"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach

                                <tr>
                                    <th></th>
                                    <th>Trimestre III</th>
                                </tr>
                                @foreach ($trimestral_mallas as $trim)
                                @if ($trim->uc_iii != '' && $trim->trayecto == 'iv' && $oa->id == $trim->pnf_id)
                                    
                                <tr>
                                    <td class="py-0">{{$trim->id}}</td>
                                    <input type="hidden" name="trayecto[]" value="{{$trim->trayecto}}">
                                    <input type="hidden" name="pnf_id[]" value="{{$oa->id}}">
                                    <td class="py-0"><input type="text" name="regular_name[]" value="{{$trim->unidad_curricular}}"></td>
                                    <td class="py-0"><input type="text" style="width:5rem;" name="modalidad[]" value="mixta"></td>
                                    <td class="py-0"><input type="text" style="width:2rem;" name="trimestre[]" value="3"></td>
                                    <input type="hidden" name="semestre[]" value="#">
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                </div>
        </div>

        <div class="card" style="width:90%;">
            <div class="card-body d-flex flex-wrap" style="justify-content: flex-end;">
                <button class="btn btn-success">Enviar</button>
            </div>
        </div>
    </form>

    @endif
<!----------------- SEMESTRAL ------------------------>

    @if ($oa->malla_tipo == 'semestral')
        <div class="card">
            <div class="card-body">
                @foreach ($trimestral_mallas as $sem)
                    
                @endforeach
            </div>
        </div>


    <div class="card" style="width:90%;">
        <div class="card-body d-flex flex-wrap" style="justify-content: flex-end;">
            <button class="btn btn-success">Enviar</button>
        </div>
    </div>

    @endif
    @endforeach

</main>
@stop
