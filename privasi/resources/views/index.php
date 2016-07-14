@extends('template.t_index')
@section('body') <body onload="initialize()"> @stop
@section('content')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&amp;key=ABQIAAAA8tt4eKTuB ZMVnLJfP2BZrBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxS4Rz1LFzG0odNPtk8VLkdrQF5grA"></script>
<script>
function initialize() {
	if (GBrowserIsCompatible()) {
		var latlng = new google.maps.LatLng(-6.4, 106.8186111);
		var myOptions = {
			zoom: 13,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	}
		alert('hore');
}
</script>

<section>
    <article>
        <div class="container-fluid">
            <div id="map_canvas" style="width:100%; height:400px"></div> 
        </div>
    </article>
    <article>
        <div class="container">
            <p>Index</p>
        </div>
    </article>
</section>

@stop