<template>
    <img :src="repeatable.image[0].url" alt="" />
</template>

<script lang="ts">
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        repeatable: {
            type: Object,
        },
    },
    setup(props) {},
});
</script>
