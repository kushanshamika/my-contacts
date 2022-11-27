$.ajaxPrefilter(function(options, originalOptions, jqXHR) {
    options.url = 'http://localhost:8888/my-contacts/index.php/api' + options.url
})

// http://localhost:8888/my-contacts/index.php/api
// https://w1715093.users.ecs.westminster.ac.uk/index.php/api
// http://220.247.252.35/w1715093/index.php/api