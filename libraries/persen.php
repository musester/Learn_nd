<script language="JavaScript" type="text/javascript">
function CalculateTotal(frm) {
    var persen = 0

    // Run through all the form fields
    for (var i=0; i < frm.elements.length; ++i) {

        // Get the current field
        form_field = frm.elements[i]

        // Get the field's name
        form_id = form_field.id

        // Is it a "BRUHuct" field?
        if (form_id.substring(0,4) == "BRUH") {

            // If so, extract the price from the name
            item_price = parseFloat(form_id.substring(form_id.lastIndexOf("_") + 1))

            // Get the quantity
            item_quantity = parseInt(form_field.value)

            // Update the order total
            if (item_quantity >= 0) {
                persen += item_quantity * item_price
            }
        }
    }

    // Display the total rounded to two decimal places
    document.getElementById("persen").firstChild.data =  round_decimals(persen, 0) + " %"
}

function round_decimals(original_number, decimals) {
    var result1 = original_number * Math.pow(10, decimals)
    var result2 = Math.round(result1)
    var result3 = result2 / Math.pow(10, decimals)
    return pad_with_zeros(result3, decimals)
}

function pad_with_zeros(rounded_value, decimal_places) {

    // Convert the number to a string
    var value_string = rounded_value.toString()
    
    // Locate the decimal point
    var decimal_location = value_string.indexOf(".")

    // Is there a decimal point?
    if (decimal_location == -1) {
        
        // If no, then all decimal places will be padded with 0s
        decimal_part_length = 0
        
        // If decimal_places is greater than zero, tack on a decimal point
        value_string += decimal_places > 0 ? "." : ""
    }
    else {

        // If yes, then only the extra decimal places will be padded with 0s
        decimal_part_length = value_string.length - decimal_location - 1
    }
    
    // Calculate the number of decimal places that need to be padded with 0s
    var pad_total = decimal_places - decimal_part_length
    
    if (pad_total > 0) {
        
        // Pad the string with 0s
        for (var counter = 1; counter <= pad_total; counter++) 
            value_string += "0"
        }
    return value_string
}

//-->
</script>