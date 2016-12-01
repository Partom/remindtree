<script>
    $('form.multi-form a.next').click(function() {
        $('fieldset.active').fadeOut(500).removeClass('active')
            .next('fieldset').fadeIn(500).addClass('active');

        $('html, body').animate({
            scrollTop: $("#ttl").offset().top
        }, 500)
    });

    $('form.multi-form a.prev').click(function() {
        $('fieldset.active').fadeOut(500).removeClass('active')
            .prev('fieldset').fadeIn(500).addClass('active');
        $('html, body').animate({
            scrollTop: $("#ttl").offset().top
        }, 500)
    })

    $("#features").click(function() {
        window.location.href = '/#fts';

    });
    $('.panel-heading a').click(function() {
        $('.panel-heading').removeClass('actives');
        $(this).parents('.panel-heading').addClass('actives');

        $('.panel-title').removeClass('actives'); //just to make a visual sense
        $(this).parent().addClass('actives'); //just to make a visual sense

    });





    $(document).on('click', '#verifynewuser', function() {
        var data = $("#phone_number").intlTelInput("getNumber");
        console.log(data);
        $.ajax({
            type: 'POST',
            url: '/verifynewuser',
            data: {'phone_number':data},
            success: function(data) {
                console.log(data);
                sessionStorage.setItem('fn', data['phone_number']);
                sessionStorage.setItem('vn', data['verification_code']);
                $('#verifynewuser').fadeIn(700).text('Resend');
                $('#verif_animation').fadeIn(700).removeClass('hideme')
                $('#signupbt').fadeIn(700).removeClass('hideme')
            },
            error: function(data) {
                alert('error');
            }
        });
        return false;
    });

    $(document).on('click', '#signupuser', function(event) {



        var retrievedObject1 = sessionStorage.getItem('vn');
        var retrievedObject2 = sessionStorage.getItem('fn');
        var input_code = $("#verif_code").val();
        var phone_number = $("#phone_number").intlTelInput("getNumber");
        $("#fnumber").val(phone_number);
        
        if (retrievedObject1 != input_code) {
            event.preventDefault();
        }
    });



    var mySelect2 = $('#city');

    function getCity(val) {

        $.ajax({
            type: "get",
            url: "/getcity",
            data: 'state_id=' + val,
            success: function(data) {
                $("#city").html(data);
                $.each(data, function(val, text) {
                    mySelect2.append(
                        $('<option></option>').val(val).html(text)
                    );
                });

            }
        });
    }
    var mySelect = $('#state');

    function getState(val) {

        $.ajax({
            type: "get",
            url: "/getstate",
            data: 'country_id=' + val,
            success: function(data) {
                $("#state").html(data);
                $.each(data, function(val, text) {
                    mySelect.append(
                        $('<option></option>').val(val).html(text)
                    );
                });

            }
        });
    }


    $("#phone_number").intlTelInput({
        // allowDropdown: false,
        autoHideDialCode: true,
        // autoPlaceholder: false,
        // dropdownContainer: "body",
        // excludeCountries: ["us"],
        initialCountry: "auto",
        // nationalMode: false,
        // numberType: "MOBILE",
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // preferredCountries: ['cn', 'jp'],
        separateDialCode: true,
        utilsScript: "<?php echo e(asset('js/utils.js')); ?>",
    });

</script>