<template>
    <div>
        <Link :href="locale" v-for="(locale, index) in locales" :key="index">
            {{ locale }}
        </Link>
    </div>
</template>

<script lang="ts">
import { defineComponent, computed } from 'vue';
import { Link, usePage } from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        Link,
    },
    setup() {
        const locales = computed(() => usePage().props.value.locales);
        return {
            locales,
        };
    },
});
</script>
