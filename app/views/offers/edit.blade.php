@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('offers.edit_offer') }}</h1>

@if ($errors->any())
<div>
    {{ implode('', $errors->all('<p class="text-danger">:message</p>')) }}
</div>
@endif

{{ Form::model($offer, array('method' => 'PATCH', 'route' => array('offers.update', $offer->id), 'role' => 'form')) }}
<div class="form-group">
            {{ Form::label('title', trans('offers.title')) }}
            {{ Form::text('title',null, array('class' => 'form-control')) }}
        </div>

<div class="form-group">
            {{ Form::label('description', trans('offers.description')) }}
            {{ Form::textarea('description',null, array('class' => 'form-control')) }}
        </div>

         <?php $cities = array(0 => trans('offers.choose_city'));
         foreach (City::get(array('id', 'name')) as $city) {
            $cities[$city->id] = $city->name;
         } ?>

<div class="form-group">
            {{ Form::label('city_id', trans('offers.city_id')) }}
            {{ Form::select('city_id', $cities,null, array('class' => 'form-control')) }}
         </div>


      <?php $companies = array(0 => trans('offers.choose_company'));
         foreach (Company::get(array('id', 'title')) as $company) {
            $companies[$company->id] = $company->title;
         } ?>

<div class="form-group">
            {{ Form::label('company_id', trans('offers.company_id')) }}
            {{ Form::select('company_id', $companies,null, array('class' => 'form-control')) }}
         </div>

<div class="form-group">
            {{ Form::label('off', trans('offers.off')) }}
            {{ Form::input('number', 'off',null, array('class' => 'form-control')) }}
        </div>

<div class="form-group">
         {{ Form::label('file', trans('offers.image')) }}
         {{ Form::file('file')}}
         <img src="{{{ $offer->image }}}" id="thumb" style="max-width:300px; max-height: 200px; display:block; "  class="img-thumbnail">
         {{ Form::hidden('image') }}
         <div class="error"></div>
      </div>

<div class="form-group">
            {{ Form::label('expires', trans('offers.expires')) }}
            {{ Form::text('expires',null, array('class' => 'form-control')) }}
      </div>

<div class="form-group">
         {{ Form::label('tags', trans('offers.tags')) }}
         {{ Form::text('tags', Input::old('tags', implode(', ', array_fetch($offer->tags()->get(array('title'))->toArray(), 'title'))),array('class' => 'form-control')) }}
      </div>

<div class="form-group">
			{{ Form::submit(trans('offers.update'), array('class' => 'btn btn-info')) }}
			{{ link_to_route('offers.show', trans('offers.cancel'), $offer->id, array('class' => 'btn')) }}
		</div>

{{ Form::close() }}

@stop

@section('scripts')
@include('offers.scripts')
@stop