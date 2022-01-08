Backbone.Validation.configure({
    labelFormatter: 'label'
});

_.extend(Backbone.Validation.callbacks, {
    valid: function (view, attr, selector) {
        var $el = view.$('[name=' + attr + ']'), 
            $group = $el.closest('.input_validation');
        
        $group.find('.form-control').removeClass('is-invalid');
        $group.find('.invalid-feedback').html('').addClass('hidden');
    },
    invalid: function (view, attr, error, selector) {
        var $el = view.$('[name=' + attr + ']'), 
            $group = $el.closest('.input_validation');
        
        $group.find('.form-control').addClass('is-invalid');
        $group.find('.invalid-feedback').html(error).removeClass('hidden');
    }
});