<template>
    <nav>
        <Link
            :href="link.route"
            v-for="(link, index) in mainNavigation.data"
            :key="index"
        >
            {{ link.translation[currentLocale].title }}
        </Link>
    </nav>
</template>

<script lang="ts">
import { defineComponent, computed } from 'vue';
import { Link, usePage } from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        Link,
    },
    setup() {
        const currentLocale = computed(() => usePage().props.value.locale);
        const locales = computed(() => usePage().props.value.locales);
        const mainNavigation = computed(
            () => usePage().props.value.mainNavigation
        );
        return { currentLocale, locales, mainNavigation };
    },
});
</script>
