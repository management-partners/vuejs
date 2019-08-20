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
            <dashboard-breadcrumb/>
            <div class="outer">
                <div class="inner bg-container">
                  this is add language
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
  template: '#LanguageAdd'
}
</script>
