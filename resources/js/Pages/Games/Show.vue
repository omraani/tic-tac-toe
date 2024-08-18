<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
</script>
<template>
    <AuthenticatedLayout> {{ $page.props }} </AuthenticatedLayout>
</template>
