$.ajaxPrefilter(function(options, originalOptions, jqXHR) {
    options.url = 'http://localhost:8888/my-contacts/index.php/api' + options.url
})

// http://localhost:8888/my-contacts/index.php/api
// https://w1715093.users.ecs.westminster.ac.uk/index.php/api