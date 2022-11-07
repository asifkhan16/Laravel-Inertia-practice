<script setup>
    import Nav from "../Components/Nav.vue"
</script>
<template>
    <Nav />
    <section>
        <div style="width:50%; margin: 10px auto">
            <slot/>

        </div>
    </section>
</template>