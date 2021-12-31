<script type="text/template" id="create-label-template">
    <div class="col-8">
        <form class="create-label-form">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Label name" aria-label="Label Name"
                    aria-describedby="basic-addon1" name="label_name" value="<%= label ? label.get('label_name') : '' %>" />
            </div>

            <label for="btn-check" class="form-label">Label Color</label>

            <div class="input-group mb-3">
                <div class="btn-toolbar">
                    <input type="radio" class="btn-check" name="label_color" id="primary" autocomplete="off" value="primary" <%= label_color=='primary' ? 'checked' : '' %>/>
                    <label class="btn btn-primary mx-2" for="primary">&nbsp;</label>

                    <input type="radio" class="btn-check" name="label_color" id="secondary" autocomplete="off" value="secondary" <%= label_color=='secondary' ? 'checked' : '' %> />
                    <label class="btn btn-secondary mx-2" for="secondary"> &nbsp;</label>

                    <input type="radio" class="btn-check" name="label_color" id="success" autocomplete="off"  value="success" <%= label_color=='success' ? 'checked' : '' %>/>
                    <label class="btn btn-success mx-2" for="success">&nbsp;</label>

                    <input type="radio" class="btn-check" name="label_color" id="danger" autocomplete="off" value="danger"<%= label_color=='danger' ? 'checked' : '' %>/>
                    <label class="btn btn-danger mx-2" for="danger">&nbsp;</label>

                    <input type="radio" class="btn-check" name="label_color" id="warning" autocomplete="off" value="warning" <%= label_color=='warning' ? 'checked' : '' %>/>
                    <label class="btn btn-warning mx-2" for="warning">&nbsp;</label>

                    <input type="radio" class="btn-check" name="label_color" id="info" autocomplete="off" value="info" <%= label_color=='info' ? 'checked' : '' %>/>
                    <label class="btn btn-info mx-2" for="info">&nbsp;</label>
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary mr-1">save</button>
                <% if(label) { %>
                    <input type="hidden" value="<%= label.id %>" name="id">
                    <button type="button" class="btn btn-danger delete-label">Delete</button>
                <% }; %>
            </div>
        </form>
    </div>
</script>