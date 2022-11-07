<script setup>
import { stringifyStyle } from '@vue/shared';

    defineProps({
        name : String,
        tools : Array 
    })
</script>
<template>
    <h1>Hello {{ name }}</h1>
    <p>In this series we will learn the following tools.</p>
    <ul>
        <li v-for="tool in tools" v-text="tool"></li>
    </ul>
</template>