<template>
    <div>
        <Link :href="link" v-for="(link, locale) in localize" :key="locale">
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
        const localize = computed(() => usePage().props.value.localize);
        return {
            localize,
        };
    },
});
</script>
