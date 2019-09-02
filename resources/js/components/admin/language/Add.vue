<template id='LanguageAdd'>
  <div id="LanguageAdd">
    <div id="top" class="fixed">
        <dashboard-menu/>
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div  class="breadcrumb-loading">
        <div id="left" class="fixed">
            <dashboard-sidebar/>
            <!-- /#menu -->
        </div>
        <!-- /#left -->
        <div id="content" class="bg-container fixed_header_menu_conainer fixed_header_menu_page">
            <dashboard-breadcrumb v-bind:names="['LanguageAdd']"/>
            <div class="outer">
                <div class="inner bg-container">
                  <div class="back-form">
                    <form class="needs-validation" novalidate>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Short Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="shortName" placeholder="Short Name" required>
                          <div class="invalid-feedback">
                            Please provide a valid short name.
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Long Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="longName" placeholder="Long Name" required>
                          <div class="invalid-feedback">
                            Please provide a valid long name.
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Flag</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control col-sm-6" id="Flag" placeholder="Flag" required>
                          <div class="invalid-feedback">
                            Please provide a valid Flag.
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="invalidCheck">
                         Agree to terms and conditions
                       </label>
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <div class="invalid-feedback check-agree">
                            You must agree before submitting.
                          </div>
                      </div>
                      <div class="form-group btn-action">
                        <button class="btn btn-primary" type="submit">Register</button>
                      </div>
                    </form>
                  </div>
                </div>

            </div>
        </div>
        <!-- /#content -->
    </div>
    <!--wrapper-->
    <div id="right">
        <dashboard-skin/>
    </div>
    <!-- # right side -->
  </div>
</template>

<script>
export default {
  name: 'LanguageAdd',
  template: '#LanguageAdd',
  data() {
    return {

    }
  },
  methods: {
    validation: function(){
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
    }
  },
  created: function() {
    this.validation();
  }
}
</script>
