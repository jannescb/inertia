<template>
    <nav>
        <Link href="/">Home</Link>
        <Link href="/about">About</Link>
        <Link href="/contact">Contact</Link>

        <div v-for="(locale, index) in locales" :key="index">
            {{ locale }}
        </div>
    </nav>
    <main class="container mx-auto">
        <slot />
    </main>
    <footer></footer>
</template>

<script lang="ts">
import { defineComponent, computed } from 'vue';
import { Link, usePage } from '@inertiajs/inertia-vue3';

export default defineComponent({
    name: 'DefaultLayout',
    components: {
        Link,
    },
    props: {},
    setup() {
        const currentLocale = computed(() => usePage().props.value.locale);
        const locales = computed(() => usePage().props.value.locales);
        return { currentLocale, locales };
    },
});
</script>
