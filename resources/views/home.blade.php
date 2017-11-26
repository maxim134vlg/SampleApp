@extends('layout.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, eos repellendus totam sequi fuga doloremque velit excepturi adipisci libero accusamus rem eligendi vel quos debitis earum illum, ipsam laboriosam impedit.</p>
@endsection

@section('sidebar')
	@parent
	<p>This is append to sidebar</p>
@endsection