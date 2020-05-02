

@extends('layouts.app')
@section('title','mybookings')
@section('content')
<h1>list of mybookings</h1>
<a href="{{route('booking.create')}}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Book now !</a>
<div class="row">
    <div class="col">
        <h3>upcomming bookings</h3>
        <ul class="list-group">
            @foreach($commingbookings as $booking)
                @if($booking->booking_date>=now())
                    <li class="list-group-item">
                        {{$booking->booking_date}}
                    </li>
                @endif               
            @endforeach 
            <!-- @foreach( $commingbookings as $booking)
                    <li class="list-group-item">
                        {{$booking->booking_date}}
                    </li>               
            @endforeach -->
        </ul>
    </div>
    <div class="col">
        <h3>passed bookings</h3>
        <ul class="list-group">
            <!-- @foreach( $passedbookings as $booking)
                    <li class="list-group-item">
                        {{$booking->booking_date}}
                    </li>
            @endforeach -->
            @foreach($passedbookings as $booking)
                @if($booking->booking_date<=now())
                    <li class="list-group-item">
                        {{$booking->booking_date}}
                    </li>
                @endif               
            @endforeach
        </ul>
    </div>
</div>
@endsection