@extends('layouts.app')

@section('title', 'Conversion')

@section('content')
<div class="container-xl">
    <div class="page-header d-print-none">
      <div class="row align-items-center">
        <div class="col">
          <h2 class="page-title">
            {{__('Currency Convert')}}
          </h2>
        </div>
      </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card p-5">
                    @includeIf('includes.flash')
                    <form action="{{ route('conversion.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label class="form-label required">{{__('From Currency')}}</label>
                            <select name="from" id="from" class="form-select" required>
                                <option value="">{{ __('Select From Currency') }}</option>
                                @foreach ($currencies['quotes'] as $key=>$data)
                                    <option value="{{$data}}" data-currency="{{ substr($key,3)}}">{{ substr($key,3)}}</option>
                                @endforeach                    
                            </select>
                            @error('from')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label required">{{__('To Currency')}}</label>
                            <select name="to" id="to" class="form-select" required>
                                <option value="">{{ __('Select To Currency') }}</option>
                                @foreach ($currencies['quotes'] as $key=>$data)
                                    <option value="{{$data}}" data-currency="{{ substr($key,3)}}">{{ substr($key,3)}}</option>
                                @endforeach                    
                            </select>
                            @error('to')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3 mt-3">
                            <label class="form-label required">{{__('Converted Amount')}}</label>
                            <input name="amount" id="amount" class="form-control" autocomplete="off" placeholder="{{__('0.0')}}" type="number" value="{{ old('amount') }}" min="1" required>
                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <input type="hidden" name="from_currency" id="fromCurrency" value="">
                        <input type="hidden" name="to_currency" id="toCurrency" value="">
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">{{__('Submit')}}</button>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
    <script>
        $('#from').on('change',function(){
            $('#fromCurrency').val($(this).find(':selected').data("currency"));
        })

        $('#to').on('change',function(){
            $('#toCurrency').val($(this).find(':selected').data("currency"));
        })
    </script>
@endpush