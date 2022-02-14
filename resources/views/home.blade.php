@extends('layouts.app')

@section('content')
<div class="container-xl">

    <div class="page-header d-print-none">

    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">


      <div class="row mb-3">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body p-2 text-center">
              <div class="text-end text-green">
                <span class="text-green d-inline-flex align-items-center lh-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                </span>
              </div>
              <div class="h1 m-0">{{ $popularDestination }}</div>
              <div class="text-muted mb-3">@lang('popular destination currency')</div>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body p-2 text-center">
              <div class="text-end text-red">
                <span class="text-red d-inline-flex align-items-center lh-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 7 9 13 13 9 21 17" /><polyline points="21 10 21 17 14 17" /></svg>
                </span>
              </div>
              <div class="h1 m-0">{{ $totalRequest }}</div>
              <div class="text-muted mb-3">@lang('Total number of conversion requests')</div>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body p-2 text-center">
              <div class="text-end text-green">
                <span class="text-green d-inline-flex align-items-center lh-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                </span>
              </div>
              <div class="h1 m-0">7</div>
              <div class="text-muted mb-3">@lang('Transactions')</div>
            </div>
          </div>
        </div>
      </div>








    </div>
  </div>
@endsection
