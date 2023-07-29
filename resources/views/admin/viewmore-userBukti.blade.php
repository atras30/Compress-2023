@extends('layout.admin.master_layout')

@section('styles')
 
@endsection

@section('contents')
    <iframe src="{{asset('/pendaftar/'.$User->bukti)}}" id="pdf-displayer" style="width: 100%; height: 100vh;" frameborder="0"></iframe>
@endsection


@section('scripts')

@endsection

