<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <title>Google Maps API v3 Directions Example</title>


</head>
<div style="width: 700px; height: 400px;">
    {!! Mapper::render() !!}
</div>

<script>
    function createCompany(event) {
        console.log(event.latLng.lat());
        console.log(event.latLng.lng());

    }
</script>
</body>

</html>