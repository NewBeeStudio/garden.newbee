// check for selected crop region
function checkForm() {
    if (parseInt($('#w').val())) return true;
    $('.error').html('Please select a crop region and then press Upload').show();
    return false;
};

// update info by cropping (onChange and onSelect events handler)
function updateInfo(e,ratio) {
    $('#x').val(e.x*ratio);
    $('#y').val(e.y*ratio);
    $('#x2').val(e.x2*ratio);
    $('#y2').val(e.y2*ratio);
    $('#w').val(e.w*ratio);
    $('#h').val(e.h*ratio);
};

// clear info by cropping (onRelease event handler)
function clearInfo() {
    $('.info #w').val('');
    $('.info #h').val('');
};

function fileSelectHandler() {

    // get selected file
    var oFile = $('#image_file')[0].files[0];
    // hide all errors
    $('.error').hide();

    var rFilter = /^(image\/jpeg|image\/png|image\/gif)$/i;
    if (! rFilter.test(oFile.type)) {
        $('.error').html('Please select a valid image file (gif,jpg and png are allowed)').show();
        return;
    }

    // check for file size
    if (oFile.size > 1024 * 1024) {
        $('.error').html('You have selected too big file(more than 1M), please select a one smaller image file').show();
        return;
    }

    // preview element
    $('#jcrop_div').html('');
    $('#jcrop_div').append("<img id='preview' />");
    var oImage = document.getElementById('preview');
    // prepare HTML5 FileReader
    var oReader = new FileReader();
        oReader.onloadend = function() {

        // e.target.result contains the DataURL which we can use as a source of the image
        oImage.src = oReader.result;
        oImage.onload = function () { // onload event handler

            // // display step 2
            $('#jcrop_div').fadeIn(500);
            var ratio = oImage.naturalWidth/oImage.clientWidth;
            $('#ratio').val(ratio);

            // // Create variables (in this scope) to hold the Jcrop API and image size
            var jcrop_api, boundx, boundy;

            // // destroy Jcrop if it is existed
            if (typeof jcrop_api != 'undefined') 
                jcrop_api.destroy();

            // // initialize Jcrop
            $('#preview').Jcrop({
                minSize: [32, 32], // min crop size
                aspectRatio : 1, // keep aspect ratio 1:1
                bgFade: true, // use fade effect
                bgOpacity: .3, // fade opacity
                onChange: function(e){updateInfo(e,ratio);},
                onSelect: function(e){updateInfo(e,ratio);},
                onRelease: clearInfo
            }, function(){

                // use the Jcrop API to get the real image size
                var bounds = this.getBounds();
                boundx = bounds[0];
                boundy = bounds[1];

                // Store the Jcrop API in the jcrop_api variable
                jcrop_api = this;
            });
        };
    };

    // read selected file as DataURL
    oReader.readAsDataURL(oFile);
}