/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function() {

    // var socket = io();
    // socket.on('testerEvent', function(data){document.write(data.description)});

    $('button.join').on('click', function() {
        var $tr = $(this).closest('tr');
        var sessionId = $tr.data('session-id');
        var sessionType = $tr.data('session-type');
        window.location.href = "/" + sessionType + "/session/" + sessionId + "/join";
    });

    $('button.remove').on('click', function() {
        console.log('remove button clicked');
    });

});