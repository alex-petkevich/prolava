@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('offers.create_offer') }}</h1>

{{ Form::open(array('route' => 'offers.store')) }}
	<ul>
        <li>
            {{ Form::label('title', trans('offers.title')) }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('description', trans('offers.description')) }}
            {{ Form::textarea('description') }}
        </li>

      <?php $cities = array(0 => trans('offers.choose_city'));
      foreach (City::get(array('id', 'name')) as $city) {
         $cities[$city->id] = $city->name;
      } ?>

      <li>
         {{ Form::label('city_id', trans('offers.city_id')) }}
         {{ Form::select('city_id', $cities) }}
      </li>

      <?php $companies = array(0 => trans('offers.choose_company'));
      foreach (Company::get(array('id', 'title')) as $company) {
         $companies[$company->id] = $company->title;
      } ?>

      <li>
         {{ Form::label('company_id', trans('offers.company_id')) }}
         {{ Form::select('company_id', $companies) }}
      </li>

        <li>
            {{ Form::label('off', trans('offers.off')) }}
            {{ Form::input('number', 'off') }}
        </li>

        <li>
           {{ Form::label('file', trans('offers.image')) }}
           {{ Form::file('file')}}
           <img src="" id="thumb" style="max-width:300px; max-height: 200px; display: block;">
           {{ Form::hidden('image') }}
           <div class="error"></div>
        </li>

        <li>
            {{ Form::label('expires', trans('offers.expires')) }}
            {{ Form::text('expires') }}
        </li>

      <li>
         {{ Form::label('tags', trans('offers.tags')) }}
         {{ Form::text('tags', Input::old('tags', implode(', ', array_fetch($offer->tags()->get(array('title'))->toArray(), 'title')))) }}
      </li>


      <li>
			{{ Form::submit(trans('offers.submit'), array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop

@section('scripts')
@include('offers.scripts')
@stop


