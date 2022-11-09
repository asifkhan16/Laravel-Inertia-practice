<script setup>
    import Nav from "../Components/Nav.vue"
</script>
<template>
    <Nav />
    <section>
        <div class="container">
            <slot/>
        </div>
    </section>
</template>