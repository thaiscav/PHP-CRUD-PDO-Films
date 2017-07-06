$(document).ready(function() {

    /* PRODUCT FILTER */
    $(".filter-button").click(function() {
        var value = $(this).attr('data-filter');

        if (value == "all") {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        } else {
            //$('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.' + value).hide('3000');
            $('.filter').filter('.' + value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");

    /* PRODUCT FILTER LINK */
    $(".filter-link").click(function() {
        var value = $(this).attr('data-filter');

        if (value == "all") {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        } else {
            //$('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.' + value).hide('3000');
            $('.filter').filter('.' + value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");

    /* MODAL LOGIN - APAGAR*/

    // click sur bouton d'identification/ Enregistrement
    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

    $('#register-form-link').click(function(e) {;
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

    /*TEST VALIDATION*/

    $('#formSignUp').parsley();
    $('#formLogin').parsley();

    /*PANIER ALERT*/
    $('.btnAddAction').click(function(e) {
        //alert("1 article ajouté au panier d'achat");
        $("#alertItemAdded").show();
    });

    /*MEMBRE ENREGISTRË ALERT*/
    $('.btnRegisterSubmit').click(function(e) {
        //$("#alertMembreAdded").show();
    });

    /*MODAL GESTION FILM

    $('#modFilm-submit').on('click', function(e) {

        alert('Error');
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "app/layout/divGestionFilms.php?actionFilm=modifier",
            data: $('formModFilm ').serialize(),
            success: function(response) {
                alert(response['response']);
            },
            error: function() {
                alert('Error');
            }
        });
        return false;
    });
*/

    $('#myModal').on('show.bs.modal', function(e) {

        var $modal = $(this),
            esseyId = e.relatedTarget.id;

        //            $.ajax({
        //                cache: false,
        //                type: 'POST',
        //                url: 'backend.php',
        //                data: 'EID='+essay_id,
        //                success: function(data) 
        //                {
        $modal.find('#code').html(esseyId);
        //                }
        //            });

    })

}); //fin doc ready


/* NAVBAR */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    $("#allProd").show();
    $("#signupdiv").hide();
    $("#logindiv").hide();
    $("#gestionFilmDiv").hide();

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

/* DETAIL PROD */

function detailProduct(item) {

    $("#allProd").hide();
    $("#detailProd").show();

}

/*LOGIN DIV*/
function openLoginForm() {

    $("#allProd").hide();
    $("#signupdiv").hide();
    $("#logindiv").show();
}

/*LOGIN SLIDE PANEL DIV*/
function slideLoginForm() {

    $("#signupdiv").hide();
    $("#logindiv").show();
}

function slideSignUpForm() {

    $("#logindiv").hide();
    $("#signupdiv").show();
}

/* ADMIN GESTION PANEL DIV*/
function openGestionFilm() {

    $("#logindiv").hide();
    $("#signupdiv").hide();
    $("#allProd").hide();
    $("#gestionMembreDiv").hide();
    $("#gestionFilmDiv").show();
}

function openGestionMembre() {

    $("#logindiv").hide();
    $("#signupdiv").hide();
    $("#allProd").hide();
    $("#gestionFilmDiv").hide();
    $("#gestionMembreDiv").show();
}

function openConfigMembre() {

    //$("#gestionDiv").hide();
    $("#configMembre").show();
}

/*AUTRES FUNCTIONS*/

function envoyer(elem) {
    document.getElementById(elem).submit();
    alert("Alert de envio");
}

function montrer(elem) {
    document.getElementById(elem).style.display = 'block';
}

function cacher(elem) {
    document.getElementById(elem).style.display = 'none';
}