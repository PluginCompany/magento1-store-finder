document.addEventListener("DOMContentLoaded", function(event) {
    var s = document.createElement("script");
    s.type = "text/javascript";
    var url = 'https://maps.googleapis.com/maps/api/js?v=quarterly&libraries=places' + MAPS_API_KEY;
    s.src = url;
    document.head.appendChild(s);
});
