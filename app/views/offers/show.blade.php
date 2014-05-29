@extends('layouts.scaffold')

@section('main')

<h1>{{ trans('offers.show_offer') }}</h1>

<p>{{ link_to_route('offers.index', 'Return to all offers') }}</p>

<table class="table table-striped table-bordered table-hover table-condensed">
	<thead>
   <tr>
      <th>{{ trans('offers.title_') }}</th>
      <th>{{ trans('offers.description_') }}</th>
      <th>{{ trans('offers.city_') }}</th>
      <th>{{ trans('offers.company_') }}</th>
      <th>{{ trans('offers.off_') }}</th>
      <th>{{ trans('offers.image_') }}</th>
      <th>{{ trans('offers.tags_') }}</th>
      <th>{{ trans('offers.expires_') }}</th>
      <th>{{ trans('offers.edit') }}</th>
      <th>{{ trans('offers.delete') }}</th>
   </tr>
	</thead>

	<tbody>
		<tr>
         <td>{{{ $offer->title }}}</td>
         <td>{{ $offer->webDescription(array('shorten' => true, 'length' => 60)) }}</td>
         <td>{{{ $offer->city->name }}}</td>
         <td>{{{ $offer->company->title }}}</td>
         <td>{{{ $offer->off }}}</td>
         <td><img src="{{{ $offer->image }}}" style="max-width: 200px; max-height:150px;"/></td>
         <td>
            @foreach($offer->tags as $tag)
            <span class="badge">{{{ $tag->title }}}</span>
            @endforeach
         </td>
         <td>{{{ $offer->expires }}}</td>
                    <td>{{ link_to_route('offers.edit', trans('offers.edit'), array($offer->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('offers.destroy', $offer->id))) }}
                            {{ Form::submit(trans('offers.delete'), array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
