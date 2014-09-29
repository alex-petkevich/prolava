@extends('layouts.backend')

@section('main')

<h1>{{ trans('offers.create_offer') }}</h1>
{{--
@if ($errors->any())
<div>
        {{ implode('', $errors->all('<p class="text-danger">:message</p>')) }}
    </div>
@endif
--}}

{{ Form::open(array('route' => 'offers.store', 'role' => 'form')) }}
    <div class="form-group @if ($errors->has('title')) has-error has-feedback @endif">
            {{ Form::label('title', trans('offers.title'), array('class' => 'control-label')) }}
            {{ Form::text('title',null, array('class' => 'form-control')) }}
            @if ($errors->has('title')) <span class="glyphicon glyphicon-remove form-control-feedback"></span> @endif
    </div>

        <div class="form-group @if ($errors->has('description')) has-error has-feedback @endif">
            {{ Form::label('description', trans('offers.description'), array('class' => 'control-label')) }}
            {{ Form::textarea('description',null, array('class' => 'form-control')) }}
            @if ($errors->has('description')) <span class="glyphicon glyphicon-remove form-control-feedback"></span> @endif
        </div>

      <?php $cities = array(0 => trans('offers.choose_city'));
      foreach (City::get(array('id', 'name')) as $city) {
         $cities[$city->id] = $city->name;
      } ?>

        <div class="form-group @if ($errors->has('city_id')) has-error has-feedback @endif">
         {{ Form::label('city_id', trans('offers.city_id'), array('class' => 'control-label')) }}
         {{ Form::select('city_id', $cities,null, array('class' => 'form-control')) }}
            @if ($errors->has('city_id')) <span class="glyphicon glyphicon-remove form-control-feedback"></span> @endif
        </div>

      <?php $companies = array(0 => trans('offers.choose_company'));
      foreach (Company::get(array('id', 'title')) as $company) {
         $companies[$company->id] = $company->title;
      } ?>

<div class="form-group @if ($errors->has('company_id')) has-error has-feedback @endif">
         {{ Form::label('company_id', trans('offers.company_id'), array('class' => 'control-label')) }}
         {{ Form::select('company_id', $companies,null, array('class' => 'form-control')) }}
        @if ($errors->has('company_id')) <span class="glyphicon glyphicon-remove form-control-feedback"></span> @endif
      </div>

<div class="form-group @if ($errors->has('off')) has-error has-feedback @endif">
            {{ Form::label('off', trans('offers.off'), array('class' => 'control-label')) }}
            {{ Form::input('number', 'off',null, array('class' => 'form-control')) }}
            @if ($errors->has('off')) <span class="glyphicon glyphicon-remove form-control-feedback"></span> @endif
        </div>

<div class="form-group @if ($errors->has('file')) has-error has-feedback @endif">
           {{ Form::label('file', trans('offers.image'), array('class' => 'control-label')) }}
           {{ Form::file('file', array('class' => 'form-control'))}}
            @if ($errors->has('file')) <span class="glyphicon glyphicon-remove form-control-feedback"></span> @endif
           <img src="" id="thumb" style="max-width:300px; max-height: 200px; display: block;"  class="img-thumbnail">
           {{ Form::hidden('image') }}
           <div class="error"></div>
        </div>

<div class="form-group @if ($errors->has('expires')) has-error has-feedback @endif">
            {{ Form::label('expires', trans('offers.expires'), array('class' => 'control-label')) }}
            {{ Form::text('expires',null, array('class' => 'form-control')) }}
            @if ($errors->has('expires')) <span class="glyphicon glyphicon-remove form-control-feedback"></span> @endif
</div>

<div class="form-group @if ($errors->has('tags')) has-error has-feedback @endif">
         {{ Form::label('tags', trans('offers.tags'), array('class' => 'control-label')) }}
         {{ Form::text('tags', Input::old('tags', implode(', ', array_fetch($offer->tags()->get(array('title'))->toArray(), 'title'))),array('class' => 'form-control')) }}
        @if ($errors->has('tags')) <span class="glyphicon glyphicon-remove form-control-feedback"></span> @endif
</div>


<div class="form-group">
			{{ Form::submit(trans('offers.submit'), array('class' => 'btn btn-info')) }}
		</div>

{{ Form::close() }}

@stop

@section('scripts')
@include('offers.scripts')
@stop


