<script type="text/template" id="label-list-template">
    <div class="float-end">
        <a class="btn btn-primary" href="#/label/new">New Label</a>
    </div>
    <table class="table align-middle">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <% _.each(labels, function(label) { %>
            <tr>
                <td><h5><span class="badge bg-<%= label.get('label_color') %>"><%= label.get('label_name') %></span></h5></td>
                <td>
                    <a class="btn btn-warning btn-sm px-3" href="#/label/edit/<%= label.get('id') %>">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </td>
            </tr>
        <% }); %>
    </tbody>
    </table>
</script>