<template>
    <header class="flex justify-between">
        <MainNavigation />
        <LanguageSwitch />
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
import LanguageSwitch from './../Partials/LanguageSwitch.vue';

export default defineComponent({
    components: {
        MainNavigation,
        Footer,
        LanguageSwitch,
    },
    props: {},
    setup() {
        //
    },
});
</script>
