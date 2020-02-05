@extends('layouts.master')
@Section('content')
<script src="{{ asset('js/Chart.min.js')}}" charset="utf-8"></script>
<br>
<br>
<br>
<div>
{{ $offreWilaya->container() }}
{{ $offreWilaya->script() }}
</div>
@endsection
