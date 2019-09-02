<template id='flash-message'>
  <div id="flash-message">{{type}}
       <div v-if="type[0] == 'error'">
            <div class="alert alert-danger alert-block">
            	<button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ type[1] }}</strong>
            </div>
       </div>
       <div v-if="type[0] == 'warning'">
            <div class="alert alert-warning alert-block">
            	<button type="button" class="close" data-dismiss="alert">×</button>
            	<strong>{{ type[1] }}</strong>
            </div>
       </div>
       <div v-if="type[0] == 'info'">
            <div class="alert alert-info alert-block">
            	<button type="button" class="close" data-dismiss="alert">×</button>
            	<strong>{{ type[1] }}</strong>
            </div>
       </div>
       <div v-if="type[0] == 'success'">
            <div class="alert alert-success alert-block">
            	<button type="button" class="close" data-dismiss="alert">×</button>
            	<strong>{{ type[1] }}</strong>
            </div>
       </div>
  </div>
</template>

<script>
export default {
  name: 'flash-message',
  template: '#flash-message',
  props:  ['type']
}
</script>
