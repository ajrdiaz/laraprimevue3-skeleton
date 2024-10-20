<script setup>
import { ref } from 'vue';

import AppSubMenu from './AppSubMenu.vue';

const model = ref([
    {
        label: 'General',
        icon: 'pi pi-home',
        items: [
            {
                label: 'Inicio',
                icon: 'pi pi-fw pi-box',
                to: '/'
            },
        ]
    },
]);
</script>

<template>
    <AppSubMenu :model="model" />
</template>

<style lang="scss" scoped></style>
