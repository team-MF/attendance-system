@extends('layouts.master')

@section('title')
  {{ $pageTitle }}
@endsection

@section('content')
  <{{ $viewName }} :params="{{ $params ?? '{}' }}" />
@endsection
