<script setup>
    import { computed } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3'
    
    const userName = computed(() => {
        return $page.props.Auth.user.name;
    })

</script>
<template>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <Link class="navbar-brand" href="/">My App</Link>
          <!-- <span>Welcome {{ userName }}</span> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <Link class="nav-link" :class="{'active' : $page.component === 'Home' }" href="/">Home</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" :class="{'active' : $page.component === 'Users' }"  href="/users">Users</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" :class="{'active' : $page.component === 'Settings' }"  href="/settings">Settings</Link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</template>