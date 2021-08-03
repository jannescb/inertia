<template>
    <Head>
        <title>Your page title</title>
        <meta name="description" content="Your page description" />
    </Head>
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
import { Head } from '@inertiajs/inertia-vue3';

import MainNavigation from './../Partials/MainNavigation.vue';
import Footer from './../Partials/Footer.vue';
import Localize from '../Partials/Localize.vue';

export default defineComponent({
    components: {
        Head,
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
