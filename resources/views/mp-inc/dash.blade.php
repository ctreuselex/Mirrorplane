<style type="text/css">
    .ad-dash .list-group a.list-group-item.active, .ad-dash .list-group a.list-group-item.active:focus, .ad-dash .list-group a.list-group-item.active:hover { 
    	background-color: {{ $charColor }}; 
    	border-left: 5px solid {{ $charColor }}; }
    .list-group-item.active i { color: {{ $charColorSub }};}
    .ad-dash-pa { border-right: 5px solid {{ $charColor }}; }
    .ad-dash { 
        border-top: 1px solid {{ $charColor }};
        background: url({{ $charTexture }}); 
        background-size: 100%;
        background-blend-mode: multiply;
        background-color: {{ $charColorSub }}; }
    /*.ad-dash { 
        background: url('img/char-text-colored.jpg'); 
        background-size: cover;
        background-blend-mode: luminosity;
        border-top: 1px solid {{ $charColor }};
        background-color: {{ $charColorSub }}; }*/
    .city-scape .moon { background-color: {{ $charColor }}; }
    .city-scape .moon { box-shadow: 0 0 30px 0px {{ $charColorSub }}; border: 85px solid {{ $charColorSub }}; }
    .city-scape:hover .moon { box-shadow: 0 0 100px 10px {{ $charColor }}; border: 10px solid {{ $charColorSub }}; }
    .city-scape .city-name { color: {{ $charColor }}; }
    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover { background-color: {{ $charColor }}; }

    @foreach ($mirChars as $char)
    	<?php $ctscharcolor = $char['color']; if ($ctscharcolor=="") $ctscharcolor = "#333"; ?>
    	<?php $ctscharsubcolor = $char['subcolor']; if ($ctscharsubcolor=="") $ctscharcolor = "#d5d5d5"; ?>
		a.list-group-item.d-{{ $char['name'] }} {
	    	border-left: 5px solid {{ $ctscharcolor }}; }   
		a.list-group-item.d-{{ $char['name'] }}:hover {
	    	color: white; font-weight:bold; background-color: {{ $ctscharcolor }}; transition: 0.3s; }   
		a.list-group-item.d-{{ $char['name'] }}:hover i{
			opacity: 1; color: {{ $ctscharsubcolor }}; transition: 0.3s; }
	@endforeach
</style>

<div class="col-sm-2 ad-dash-pa">
	<a id="mirrorplane" href="/mirrorplane">
		<div class="city-scape" style="
			background-image: url({{ url('img/city-scape.jpg') }});
			background-size: contain;
		    background-repeat: no-repeat;
		    background-position: bottom;
	        background-blend-mode: multiply;">
	        <div class="moon"></div>
	        <div class="city-name" style="
				font-size: 16px;
				top: 120px;
			">City of</div>
	        <div class="city-name">{{ $cityname }}</div>
        	<!-- <p>MIRRORPLANE</p> -->
		</div>
    </a>
	<div class="ad-dash">
	    <div class="list-group">
	        @foreach ($mirChars as $char)
	        	@if ($char['ico']!='' && $char['color']!='')
	        		@if ($char['name']=='moon')
	        			<a id="djerick" href="/mirrorplane/profile/djerick" class="list-group-item d-{{ $char['name'] }}">{{ $char['name'] }}<i class="{{ $char['ico'] }}"></i></a>
	        		@elseif ($char['name']!='djerick' && $char['name']!='dom' && $char['name']!='cin')
	        			<a id="{{ $char['name'] }}" href="/mirrorplane/profile/{{ $char['name'] }}" class="list-group-item d-{{ $char['name'] }}">{{ $char['name'] }}<i class="{{ $char['ico'] }}"></i></a>
	        		@endif
	        	@endif
	        @endforeach
	        
	    </div>
	</div>
</div>