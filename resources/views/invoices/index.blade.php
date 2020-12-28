@extends('layouts.layout')

@section('content')

<div class="card">
    {{ $student->RKD01_Nama }}


    @foreach($student->invoices() as $invoice)
    {{ $invoice }}
    @endforeach
</div>



@endsection('content')
