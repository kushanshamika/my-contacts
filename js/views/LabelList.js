var LabelList = Backbone.View.extend({
    el: '.page',
    render: function () {
        var that = this;
        var labels = new Labels();
        labels.fetch({
            success: function() {
                var template = _.template($('#label-list-template').html(), {labels: labels.models});
                that.$el.html(template);
            }
        })
    }
});