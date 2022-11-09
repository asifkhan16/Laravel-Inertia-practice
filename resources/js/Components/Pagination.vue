<script setup>
    import { Link } from '@inertiajs/inertia-vue3'
    defineProps(['links'])
</script>
<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item"  v-for="link in links" :class="{'active':link.active}">
            <Link class="page-link" v-if="link.url" :href="link.url" v-html="link.label" preserve-scroll></Link>
            <Link class="page-link disabled" v-else v-html="link.label"></Link>
          </li>
        </ul>
      </nav>
</template>