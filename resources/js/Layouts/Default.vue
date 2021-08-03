<template>
    <header class="flex justify-between">
        <MainNavigation />
        <Localize />
    </header>
    <main>
        <slot />
    </main>
    <Footer />
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import MainNavigation from './../Partials/MainNavigation.vue';
import Footer from './../Partials/Footer.vue';
import Localize from '../Partials/Localize.vue';

export default defineComponent({
    components: {
        MainNavigation,
        Footer,
        Localize,
    },
    props: {},
    setup() {
        //
    },
});
</script>
