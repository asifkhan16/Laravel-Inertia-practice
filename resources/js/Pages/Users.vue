<script setup>
    import Layout from '../Layout/Layout.vue'
    import { Link } from '@inertiajs/inertia-vue3'

    defineProps([
        'time'
    ])
</script>
<template>
    <Layout>

        <h1>Users</h1>
        <div style="margin-top:80vh">
            <p>the time is {{ time }}</p>
            <!-- <h1>hmmm</h1> -->
            <Link href="/users" preserve-scroll>Time</Link>
    
        </div>
    </Layout>
</template>