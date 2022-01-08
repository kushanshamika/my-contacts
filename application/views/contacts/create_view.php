<script type="text/template" id="create-contact-template">
    <div class="col-8">
        <form class="row g-3 create-user-form">
            <div class="col-md-12 input_validation">
                <label for="validationServer01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationServer01" name="f_name" value="<%= contact ? contact.get('f_name') : '' %>">
                <div class="invalid-feedback hidden"></div>
            </div>
            <div class="col-md-12 input_validation">
                <label for="validationServer02" class="form-label">Surname</label>
                <input type="text" class="form-control" id="validationServer02" name="l_name" value="<%= contact ? contact.get('l_name') : '' %>">
                <div class="invalid-feedback hidden"></div>
            </div>
            <div class="col-md-12 input_validation">
                <label for="validationServer03" class="form-label">Phone</label>
                <input type="text" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" name="contact" value="<%= contact ? contact.get('contact') : '' %>">
                <div id="validationServer03Feedback" class="invalid-feedback hidden"></div>
            </div>
            <div class="col-md-12 input_validation">
                <label for="validationServer04" class="form-label">Email</label>
                <input type="text" class="form-control" id="validationServer04" aria-describedby="validationServer04Feedback" name="email" value="<%= contact ? contact.get('email') : '' %>">
                <div id="validationServer03Feedback" class="invalid-feedback hidden"></div>
            </div>
            <div class="col-md-12">
                <label for="label-form" class="form-label">Select Labels</label>
                <select class="form-select" aria-label="Select Labels" name="tags" multiple="multiple">
                    <% _.each(labels, function(label) { %>
                        <option value="<%= label.get('id') %>" <%= tags.includes(label.get('id')) ? 'selected' : '' %>><%= label.get('label_name') %></option>
                    <% }); %>
                </select>
            </div>
            <div class="col-12">
                <button class="btn btn-primary">Save</button>
                <% if(contact) { %>
                    <input type="hidden" value="<%= contact.id %>" name="id">
                    <button type="button" class="btn btn-danger delete">Delete</button>
                <% }; %>
            </div>
        </form>
    </div>
</script>