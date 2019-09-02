<template id='Breadcrumb'>
  <div id="Breadcrumb">
    <header class="head">
        <div class="main-bar">
            <div class="row">
              <ul class="breadcrumb float-right nav_breadcrumb_top_align">
                  <li class=" breadcrumb-item">
                      <a href="/admin">
                          <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                      </a>
                  </li>
                  <li v-for="(item, index) in names" :key="index" class="breadcrumb-item">
                      <router-link :to="{ name: item, params: {} }">&nbsp;&nbsp;&nbsp; {{item}}</router-link>
                  </li>
              </ul>
            </div>
        </div>
    </header>
  </div>
</template>

<script>
export default {
  name: 'Breadcrumb',
  template: '#Breadcrumb',
  props:  ['names']
}
</script>
