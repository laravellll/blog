
<br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<table class="table">
  <br>
  
  <form class="needs-validation" novalidate>

    <div class="form-group">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">name</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="{{$v->author}}" >
      </div>

      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Title</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="{{$v->title}}" >
      </div>

      <div class="col-md-4 mb-3">
        <label for="validationCustom01">description</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="{{$v->description}}" >
      </div>

      <div class="col-md-4 mb-3">
      <label for="validationCustom01">Image</label>
      <input type="file" name="image" class="form-control" id="validationCustom01" ><br>
      <img src="{{ asset($v->image) }}" width="110px" height="80px" alt="no image"/>
    </div>

    <div class="form-row">
     
     

      
    </div>

    <br>

    <button class="btn btn-primary" type="submit">Update</button>
  </form>
  
  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>

  