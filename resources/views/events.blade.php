@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css"/>
<link rel="stylesheet" href="{{ url ('css/event.css')}}">
<!-- Scripts -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/fr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/es.js"></script>

@extends('layouts.nav')

{!! $calendar_details->script() !!}
@section('content')
        <div class="container">


            <div class="img_back">
              <div class="yellow_box">
                <p class="text_y">Horaires et calendrier</p>
              </div>
            </div>
            <div class="lign1">
            </div>
            <div class="calendrier">
              <div class="box_text">
                <p class="text_horaires">
      Le parc est ouvert <span>tous les week-ends</span> (Samedi, Dimanche) à partir de <span>10 heures</span> et ferme ses portes à <span>20 heures</span>.
      </p>
            <div class="y_bar">
            </div>
              </div>
              <div class="box_calendar">
                <div class="panel panel-primary">
                  <div class="panel-body" >
                      {!! $calendar_details->calendar() !!}
                  </div>
                </div>
              </div>
            </div>
            </div>



            <div class="panel panel-primary">

                <div class="panel-body">

                     {!! Form::open(array('route' => 'events.add','method'=>'POST','files'=>'true')) !!}
                      <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12">
                            @if (Session::has('success'))
                               <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @elseif (Session::has('warnning'))
                                <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                            @endif

                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                              {!! Form::label('event_name','Event Name:') !!}
                              <div class="">
                              {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
                              {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                              </div>
                          </div>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3">
                          <div class="form-group">
                            {!! Form::label('start_date','Start Date:') !!}
                            <div class="">
                            {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                          </div>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3">
                          <div class="form-group">
                            {!! Form::label('end_date','End Date:') !!}
                            <div class="">
                            {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                          </div>
                        </div>

                        <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                        {!! Form::submit('Add Event',['class'=>'btn btn-primary']) !!}
                        </div>
                      </div>
                     {!! Form::close() !!}

               </div>

              </div>


@endsection
