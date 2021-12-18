$.ajaxPrefilter(function(options, originalOptions, jqXHR) {
    options.url = 'http://localhost:8888/my-contacts/index.php/api' + options.url
})