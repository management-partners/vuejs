<template id='UserList'>
  <div id="UserList">
    <div id="top" class="fixed">
        <dashboard-menu/>
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="breadcrumb-loading">
        <div id="left" class="fixed">
            <dashboard-sidebar/>
            <!-- /#menu -->
        </div>
        <!-- /#left -->
        <div id="content" class="bg-container fixed_header_menu_conainer fixed_header_menu_page">
            <dashboard-breadcrumb v-bind:names="['UserList']"/>
            <div class="outer">
                <div class="inner bg-container">
                  <div class="back-form">
                    <table class="table table-hover">
                         <thead>
                              <tr>
                                   <td>#</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td>Action</td>
                              </tr>
                         </thead>
                         <tbody>
                              <tr v-for="(entry, index) in lstUser" :key="entry.id">
                                   <td>{{index +1}}</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td class="td-action-control">
                                        <button class="btn btn-info"><awesome-icon icon="edit" /></button>
                                        <button class="btn btn-danger"><awesome-icon icon="trash-alt" /></button>
                                   </td>
                              </tr>
                         </tbody>
                    </table>
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
    name: 'UserList',
    template: '#UserList',
    data() {
         return {
            lstUser: null
         }
   },
   methods: {
        // データベースでデータを得る
        loadLanguage: function() {
             var getUrl = URL_PATH.hostname+URL_AXIOS.url_getLanguage;
             axios
                 // .get(getUrl, { headers: { "Content-Type": "application/json" }, })
                 .get(getUrl)
                 .then(response => {
                     this.lstUser = response.data;
                 })
                 .catch(function (error) {
                 });
        }
  },
  created:function(){
       this.loadLanguage();
  }
  }
</script>
