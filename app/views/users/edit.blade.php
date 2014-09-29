@extends('layouts.backend')

@section('main')
<div class="col-xs-5">
<h1>{{ trans('users.edit_user') }}</h1>
{{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id), 'role' => 'form')) }}
    <div class="form-group @if ($errors->has('username')) has-error has-feedback @endif">
      {{ Form::label('username', trans('users.username'), array('class' => 'control-label')) }}
      {{ Form::text('username', $user->username, array('disabled'=>1,'class' => 'form-control')) }}
    </div>

    <div class="form-group @if ($errors->has('email')) has-error has-feedback @endif">
      {{ Form::label('email', trans('users.email'), array('class' => 'control-label')) }}
      {{ Form::text('email', $user->email, array('disabled'=>1,'class' => 'form-control')) }}
    </div>

    <div class="form-group @if ($errors->has('roles')) has-error has-feedback @endif">
      {{ Form::label('roles', trans('users.roles'), array('class' => 'control-label')) }}
      {{ Form::text('roles', Input::old('roles', implode(', ', array_fetch($user->roles()->get(array('role'))->toArray(), 'role'))),array('class' => 'form-control')) }}
    </div>

        <div class="form-group">
      {{ Form::submit(trans('users.update'), array('class' => 'btn btn-info')) }}
      {{ link_to_route('users.show', trans('users.cancel'), $user->id, array('class' => 'btn btn-default')) }}
        </div>
{{ Form::close() }}
</div>
{{--
@if ($errors->any())
<ul>
   {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
--}}
@stop

@section('scripts')
<script>
   $(document).ready(function(){
      function split( val ) {
         return val.split( /,\s*/ );
      }
      function extractLast( term ) {
         return split( term ).pop();
      }

      $( "#roles" )
         // don't navigate away from the field on tab when selecting an item
         .bind( "keydown", function( event ) {
            if ( event.keyCode === $.ui.keyCode.TAB &&
               $( this ).data( "ui-autocomplete" ).menu.active ) {
               event.preventDefault();
            }
         })
         .autocomplete({
            source: function( request, response ) {
               $.getJSON( "/roles", {
                     term: extractLast( request.term ),
                  },
                  function( data ) {
                     response($.map(data, function(item) {
                        return {
                           value: item.role
                        }
                     }))
                  }
               );
            },
            search: function() {
               // custom minLength
               var term = extractLast( this.value );
               if ( term.length < 2 ) {
                  return false;
               }
            },
            focus: function() {
               // prevent value inserted on focus
               return false;
            },
            select: function( event, ui ) {
               console.log(ui);
               console.log(this);
               var terms = split( this.value );
               // remove the current input
               terms.pop();
               // add the selected item
               terms.push( ui.item.value );
               // add placeholder to get the comma-and-space at the end
               terms.push( "" );
               this.value = terms.join( ", " );
               return false;
            }
         });
   });
</script>
@stop