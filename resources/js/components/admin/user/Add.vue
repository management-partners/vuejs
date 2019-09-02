<template id='UserAdd'>
  <div id="UserAdd">
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
            <dashboard-breadcrumb v-bind:names="['UserAdd']"/>
            <div class="outer">
                <div class="inner bg-container">
                  <div class="back-form">
                     <flash-message v-bind:type="[type,message]"/>
                    <form class="needs-validation" novalidate>
                      <div class="form-group row">
                        <label for="staticName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" v-model="name" placeholder="Name" required>
                          <div class="invalid-feedback">
                            Please provide a valid name.
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" v-model="email" placeholder="Email" required>
                          <div class="invalid-feedback">
                            Please provide a valid email.
                          </div>
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
import axios from 'axios';
import { URL_AXIOS, URL_PATH, constant } from './../../../plugins/admin/globalValue.js';

export default {
  name: 'UserAdd',
  template: '#UserAdd',
  data() {
    return {
        name: '',
        email: '',
        type: '',
        message:''
    }
  },
  methods: {
    validation: function(){
         var ref = this;
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
           }else{
                ref.sendEmailRegister();
           }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    },
    // メールを送信する
    sendEmailRegister: function() {
          let currentObj = this;
         var getUrl = URL_PATH.hostname+URL_AXIOS.url_postSendEmailRegister;
         axios
              .post(getUrl, {
                   name: this.name,
                   email: this.email
               })
               .then(response => {
                   currentObj.type      = response.data.type;
                   currentObj.message   = response.data.message;
               })
               .catch(function (error) {
                 currentObj.output = error;
               });
    }
  },
  created: function() {
    this.validation();
  }
}
</script>
