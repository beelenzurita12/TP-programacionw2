$(document).ready(function () {

    $('#ubicacion').change(function () {
        if ($(this).is(":checked")) {

            var startPos;
            var geoSuccess = function (position) {
                startPos = position;
                $('#startLat').html = startPos.coords.latitude;
                console.log(startPos.coords.latitude);
                $('#startLon').html = startPos.coords.longitude;
                console.log(startPos.coords.longitude);
                $('#ubicacion').attr("data-longitude", startPos.coords.longitude);
                $('#ubicacion').attr("data-latitude", startPos.coords.latitude);
            };
            navigator.geolocation.getCurrentPosition(geoSuccess);
        }
        else{
            $('#ubicacion').attr("data-longitude", "");
            $('#ubicacion').attr("data-latitude", "");
        }
    });

});