function displayResults(result) {

    jQuery('#storelocation_lat').val(result.lat());
    jQuery('#storelocation_lng').val(result.lng());


    var street = '';

    if(result.nameForType('route')){
        street = result.nameForType('route') + ' ';
    }

    if(result.nameForType('street_number')){
       street = street + result.nameForType('street_number');
    }

    var city = result.nameForType('locality');
    if(!city) {
        city = '';
    }
    var region = result.nameForType('administrative_area_level_1');
    if(!region) {
        region = '';
    }
    var postalcode = result.nameForType('postal_code');
    if(!postalcode){
        postalcode = '';
    }
    var country = result.nameForType('country',true);
    if(!country) {
        country = '';
    }

    if(street) {
        jQuery('#storelocation_address').val(street);
    }


    jQuery('#storelocation_city').val(city);
    jQuery('#storelocation_state').val(region);
    jQuery('#storelocation_postal').val(postalcode);
    jQuery('#storelocation_country').val(country);


}
var addressPicker;

jQuery(document).ready(function () {
    jQuery('#storelocation_tabs_form_storelocation').click(function() {
        initAddresspicker();
    })
    varienGlobalEvents.attachEventHandler('formSubmit',function(){
        setTimeout(function(){
            initAddresspicker();
        }, 50)
    });
})

var initMaps = 0;
function initAddresspicker() {
    if(initMaps) {
        return;
    }
    initMaps = true;
    // instantiate the addressPicker suggestion engine (based on bloodhound)
    jQuery('#storelocation_storelocation_form').css('position','relative').append('<div id="map"></div>');

    var latVal = jQuery('#storelocation_lat').val();
    var lngVal = jQuery('#storelocation_lng').val();

    var ltln = new google.maps.LatLng(latVal,lngVal);
    addressPicker = new AddressPicker({
        map: {
            id: '#map',
            center: ltln,
            zoom: 18
        },
        marker: {
            draggable: true,
            visible: true
        },
        zoomForLocation: 3,
        reverseGeocoding: true
    });

    // instantiate the typeahead UI
    jQuery('#storelocation_fulladdress').typeahead(null, {
        displayKey: 'description',
        source: addressPicker.ttAdapter()
    });
    jQuery('#storelocation_fulladdress').attr('type', 'search');


    addressPicker.bindDefaultTypeaheadEvent(jQuery('#storelocation_fulladdress'))
    jQuery(addressPicker).on('addresspicker:selected', function (event, result) {
        displayResults(result);
    });
};


