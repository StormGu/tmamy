<ul class="page-breadcrumb breadcrumb">
@foreach ($breadcrumbs as $breadcrumb)
	<li>
		@if ($breadcrumb['href'] != '#' )
		<a href="{{ $breadcrumb['href'] }}">{{ $breadcrumb['text'] }}</a>
		<i class="fa fa-circle"></i>
		@else
		<span class="active">{{ $breadcrumb['text'] }}</span>
		@endif
	</li>
	@endforeach
</ul>