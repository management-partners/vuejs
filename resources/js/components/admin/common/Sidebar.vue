<template id='Sidebar'>
        <!-- #menu -->
        <ul id="menu">
            <li>
                <router-link :to="{ name: 'Dashboard', params: {} }" >&nbsp;Dashboard</router-link>
            </li>
            <li class="dropdown_menu">
                <a href="javascript:void(0)">
                    <i class="fa fa-tachometer"></i>
                    <span class="link-title menu_hide">&nbsp;Language</span>
                    <span class="fa arrow menu_hide"></span>
                </a>
                <ul>
                    <li>
                        <router-link :to="{ name: 'LanguageList', params: {} }" >&nbsp; Language List</router-link>
                    </li>
                    <li>
                      <router-link :to="{ name: 'LanguageAdd', params: {} }" >&nbsp; Add Language</router-link>
                    </li>
                </ul>
            </li>
            <li class="dropdown_menu">
                <a href="javascript:void(0)">
                    <i class="fa fa-tachometer"></i>
                    <span class="link-title menu_hide">&nbsp;User</span>
                    <span class="fa arrow menu_hide"></span>
                </a>
                <ul>
                    <li>
                        <router-link :to="{ name: 'UserList', params: {} }" >&nbsp; User List</router-link>
                    </li>
                    <li>
                      <router-link :to="{ name: 'UserAdd', params: {} }" >&nbsp; Add User</router-link>
                    </li>
                </ul>
            </li>
        </ul>
</template>

<script>
export default {
  name: 'Sidebar',
  template: '#Sidebar'
}
</script>
