@extends('layouts.app')
@section('title', 'Projek-A')

@section('content')
<div class="page-wrapper">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Golongan</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> {{ $golongan->kode}} </td>
                        <td>{{ $golongan->keterangan}}</td>
                    </tr>
                    <tr>
                        <td>{{ $golongan->kode}}</td>
                        <td>{{ $golongan->keterangan}}</td>
                    </tr>
                    <tr>
                        <td>{{ $golongan->kode}}</td>
                        <td>{{ $golongan->keterangan}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
</div>

@stop