@php if(!defined('ABSPATH')) { exit; } @endphp
@extends('layouts.app')
@section('content')
	@while(have_posts())
		@php the_post() @endphp
		@include('woocommerce.partials.single-product.content')
	@endwhile
@endsection