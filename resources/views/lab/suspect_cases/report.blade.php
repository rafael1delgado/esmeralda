@extends('layouts.app')

@section('title', 'Reporte COVID-19')

@section('content')
<h3 class="mb-3">Reporte COVID-19</h3>

<div class="row">
    <div class="col-12 col-sm-4">
        <table class="table table-bordered col3">
            <tbody>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td>Hom</td>
                    <td>Muj</td>
                </tr>

                <tr>
                    <th class="table-active">Enviados a análisis</th>
                    <th class="table-active text-center">
                        {{ $cases->count() }}
                    </th>
                    <th class="table-active text-center">
                        {{ $cases->where('patient.gender','male')->count() }}
                    </th>
                    <th class="table-active text-center">
                        {{ $cases->where('patient.gender','female')->count() }}
                    </th>
                </tr>

                <tr>
                    <td>Positivos</td>
                    <th class="text-danger text-center">
                        {{ $cases->where('pscr_sars_cov_2','positive')->count() }}
                    </th>
                    <th class="text-danger text-center">
                        {{ $cases->where('patient.gender','male')->where('pscr_sars_cov_2','positive')->count() }}
                    </th>
                    <th class="text-danger text-center">
                        {{ $cases->where('patient.gender','female')->where('pscr_sars_cov_2','positive')->count() }}
                    </th>
                </tr>

                <tr>
                    <td>Negativos</td>
                    <td class="text-center">
                        {{ $cases->where('pscr_sars_cov_2','negative')->count() }}
                    </td>
                    <td class="text-center">
                        {{ $cases->where('patient.gender','male')->where('pscr_sars_cov_2','negative')->count() }}
                    </td>
                    <td class="text-center">
                        {{ $cases->where('patient.gender','female')->where('pscr_sars_cov_2','negative')->count() }}
                    </td>
                </tr>

                <tr>
                    <td>Pendiente resultado</td>
                    <td class="text-center">
                        {{ $cases->where('pscr_sars_cov_2','pending')->count() }}
                    </td>
                    <td class="text-center">
                        {{ $cases->where('patient.gender','male')->where('pscr_sars_cov_2','pending')->count() }}
                    </td>
                    <td class="text-center">
                        {{ $cases->where('patient.gender','female')->where('pscr_sars_cov_2','pending')->count() }}
                    </td>
                </tr>


                <tr>
                    <th class="table-active">Hospitalizados</th>
                    <th class="table-active text-center">
                        {{ $cases->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->count() }}
                    </th>
                    <th class="table-active text-center">
                        {{ $cases->where('patient.gender','male')->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->count() }}
                    </th>
                    <th class="table-active text-center">
                        {{ $cases->where('patient.gender','female')->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->count() }}
                    </th>
                </tr>

                <tr>
                    <td>Negativos</td>
                    <td class="text-center">
                        {{ $cases->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->where('pscr_sars_cov_2','negative')->count() }}
                    </td>
                    <td class="text-center">
                        {{ $cases->where('patient.gender','male')->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->where('pscr_sars_cov_2','negative')->count() }}
                    </td>
                    <td class="text-center">
                        {{ $cases->where('patient.gender','female')->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->where('pscr_sars_cov_2','negative')->count() }}
                    </td>
                </tr>

                <tr>
                    <td>Positivos</td>
                    <td class="text-danger text-center">
                        {{ $cases->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->where('pscr_sars_cov_2','positive')->count() }}
                    </td>
                    <td class="text-danger text-center">
                        {{ $cases->where('patient.gender','male')->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->where('pscr_sars_cov_2','positive')->count() }}
                    </td>
                    <td class="text-danger text-center">
                        {{ $cases->where('patient.gender','female')->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->where('pscr_sars_cov_2','positive')->count() }}
                    </td>
                </tr>

                <tr>
                    <td>Resultado pendiente</td>
                    <td class="text-center">
                        {{ $cases->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->where('pscr_sars_cov_2','pending')->count() }}
                    </td>
                    <td class="text-center">
                        {{ $cases->where('patient.gender','male')->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->where('pscr_sars_cov_2','pending')->count() }}
                    </td>
                    <td class="text-center">
                        {{ $cases->where('patient.gender','female')->whereIn('status',['Hospitalizado Básico','Hospitalizado Crítico'])->where('pscr_sars_cov_2','pending')->count() }}
                    </td>
                </tr>

                <tr>
                    <th>UCI (Críticos)</th>
                    <th class="text-center">
                        {{ $cases->where('status','Hospitalizado Crítico')->count() }}
                        <span class="text-danger">
                            ({{ $cases->where('status','Hospitalizado Crítico')->where('pscr_sars_cov_2','positive')->count() }})
                        </span>
                    </th>
                    <th class="text-center">
                        {{ $cases->where('patient.gender','male')->where('status','Hospitalizado Crítico')->where('pscr_sars_cov_2','negative')->count() }}
                        <span class="text-danger">
                            ({{ $cases->where('patient.gender','male')->where('status','Hospitalizado Crítico')->where('pscr_sars_cov_2','positive')->count() }})
                        </span>
                    </th>
                    <th class="text-center">
                        {{ $cases->where('patient.gender','female')->where('status','Hospitalizado Crítico')->where('pscr_sars_cov_2','negative')->count() }}
                        <span class="text-danger">
                            ({{ $cases->where('patient.gender','female')->where('status','Hospitalizado Crítico')->where('pscr_sars_cov_2','positive')->count() }})
                        </span>
                    </th>
                </tr>

                <tr>
                    <th class="table-active" colspan="2">Sospechas por Origen</th>
                </tr>

                <tr>
                    <td>Hospital ETG</td>
                    <td class="text-center">
                        {{ $cases->where('origin','Hospital ETG')->count() }}
                        <span class="text-danger">
                            ( {{ $cases->where('origin','Hospital ETG')->where('pscr_sars_cov_2','positive')->count() }} )
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>APS</td>
                    <td class="text-center">
                        {{ $cases->whereIn('origin',['CESFAM Guzmán','Hector Reyno'])->count() }}
                        <span class="text-danger">
                            ( {{ $cases->whereIn('origin',['CESFAM Guzmán','Hector Reyno'])->where('pscr_sars_cov_2','positive')->count() }} )
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Privados</td>
                    <td class="text-center">
                        {{ $cases->whereIn('origin',['Clínica Tarapacá','Clínica Iquique'])->count() }}
                        <span class="text-danger">
                            ( {{ $cases->whereIn('origin',['Clínica Tarapacá','Clínica Iquique'])->where('pscr_sars_cov_2','positive')->count() }} )
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('custom_js')

@endsection
