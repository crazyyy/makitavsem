function onServiceCenterSelected(el) {
    if (el.value != '0'){
        var $table = jQuery('#dataCenters');
        $table.show();
        $table.find('tbody tr').hide();
        $table.find('tbody tr[data-region=' + el.value + ']').show();
    } else{
        hideServiceCentersTable();
    }
}

function hideServiceCentersTable(){
    jQuery('#dataCenters').hide();
}

hideServiceCentersTable();

jQuery(function(a) {
    /*SHOPPING CART*/

    var $checkout_form = jQuery("form.checkout"),
        $address_field = jQuery('#billing_address_1_field');
    $checkout_form.on('change', 'select.shipping_method',  function () {
        adjustAddressVisibility();
    });

    function adjustAddressVisibility() {
        if (jQuery("select.shipping_method").val() === 'local_delivery') {
            $address_field.show();
        } else {
            $address_field.hide();
        }
    }

    $address_field.change(validateAddress);

    function validateAddress(){
        $address_field.removeClass('custom-validated');
        $address_field.removeClass('custom-invalid');

        if (!$address_field.find('input.input-text').val()){
            $address_field.addClass('custom-invalid');
        }else{
            $address_field.addClass('custom-validated');
        }
    }

    adjustAddressVisibility();
    validateAddress();
});

function hideFree(){
    var txt='Бесплатно!';
	jQuery('.amount:contains("'+txt+'")').css('display','none');
}

hideFree();



