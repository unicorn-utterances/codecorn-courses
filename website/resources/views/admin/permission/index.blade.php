@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-slate-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.permission.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('permission_create')
                <a class="btn btn-indigo" href="{{ route('admin.permissions.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.permission.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('permission.index')

</div>
@endsection
