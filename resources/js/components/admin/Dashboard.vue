<template id='Dashboard'>
  <div id="Dashboard">
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
            <dashboard-breadcrumb/>
            <div class="outer">
                <div class="inner bg-container">
                    this is dashboard page
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
  name: 'Dashboard',
  template: '#Dashboard'
}
</script>
