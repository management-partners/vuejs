<template id="Menu">
    <!--Navbar-->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top menu-background">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu"
      aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="mainMenu">

      <!-- Links -->
        <ul class="navbar-nav mr-auto float-right">
          <li class="nav-item" v-for="name in names">
            <router-link :to="{ name: name[1], params: {} }">{{name[0]}} </router-link>
            <!-- <a class="nav-link":href="name[1]"> {{name[0]}} <span class="sr-only">(current)</span></a> -->
          </li>
          <!-- Dropdown -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->

        </ul>
        <!-- <ul>
          <li v-for="entry in languages" :key="entry.title">
            <button @click="changeLocale(entry.language)" v-if="entry.language == 'en'">
               <flag :iso="entry.flag" v-bind:squared="false" /> {{ $t('menu.en') }}
             </button>
             <button @click="changeLocale(entry.language)" v-else-if="entry.language == 'vi'">
                <flag :iso="entry.flag" v-bind:squared="false" /> {{ $t('menu.vi') }}
              </button>
              <button @click="changeLocale(entry.language)" v-else="entry.language == 'ja'">
                 <flag :iso="entry.flag" v-bind:squared="false" /> {{ $t('menu.ja') }}
               </button>
          </li>
        </ul> -->
        <ul>
          <li v-for="entry in lstLanguage" :key="entry.id">{{ entry.short_name}}
            <!-- <button @click="changeLocale(entry.short_name)" v-if="entry.short_name == 'en'">
               <flag :iso="entry.icon" v-bind:squared="false" /> {{ entry.long_name }}
             </button> -->
             <!-- <button @click="changeLocale(entry.short_name)" v-else-if="entry.short_name == 'vi'">
                <flag :iso="entry.icon" v-bind:squared="false" /> {{ endtry.long_name }}
              </button>
              <button @click="changeLocale(entry.short_name)" v-else="entry.short_name == 'ja'">
                 <flag :iso="entry.icon" v-bind:squared="false" /> {{ entry.long_name }}
               </button> -->
          </li>
        </ul>
      <!-- Links -->
    </div>
    <!-- Collapsible content -->
  </nav>
  <!--/.Navbar-->
  <!-- <li><button class="btn btn-primary">test button</button></li> -->
</template>

<script>
import i18n  from './../../plugins/i18n';
import axios from 'axios';
import { URL_AXIOS, URL_PATH, CONSTANT } from './../../plugins/globalValue.js';

export default {
  name: 'Menu',
  template: '#Menu',
  data() {
    return {
      lstLanguage: null,
      names: [['Trang Chủ','Main'], ['Đăng Kí','Register'], ['Đăng Nhập','Login']],
      // languages: [
      //   { flag: 'us', language: 'en'},
      //   { flag: 'vn', language: 'vi'},
      //   { flag: 'jp', language: 'ja'}
      // ]
    }
  },
  methods: {
        changeLocale(locale) {
            i18n.locale = locale;
        },
        loadLanguage: function() {
          var getUrl = URL_PATH.hostname+URL_AXIOS.url_getLanguage;
          axios
              // .get(getUrl, { headers: CONSTANT.headers })
              .get(getUrl)
              .then(response => {
                  this.lstLanguage = response.data;
                  console.log(this.lstLanguage);
              })
              .catch(function (error) {
                console.log(error);
              });
        }
    },
    created () {
      this.loadLanguage();
    }
}
</script>
