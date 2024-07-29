<template>
    <Frontend>
        <Head title="Home" />
        <h1>This is {{ title }} </h1>
    </Frontend>
</template>

<script setup>
import Frontend from '@/Layouts/FrontendLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    title: String
});
</script>

<style lang="scss" scoped>

</style>
