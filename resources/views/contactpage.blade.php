@extends('layouts.base')

@section('content')
    <form>
        <div class="form-group">
            <h1 class="h1 contactTitle">Contact</h1>
            <label for="exampleFormControlInput1">Email-address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Soort contact</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Geld terug</option>
                <option>Feedback</option>
                <option>Problemen met ticket</option>
                <option>Vervoer</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Leg hieronder uit waar we u mee kunnen helpen:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
@endsection
