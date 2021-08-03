<template>
    <section
        :class="{
            'bg-gray-100': repeatable.sectionType == 'default',
            'bg-blue-500': repeatable.sectionType == 'blue',
        }"
    >
        <Block :block="repeatable.content" :repeatables="repeatables" />
    </section>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import Block from './../Block.vue';
import RepeatableText from './Text.vue';

export default defineComponent({
    components: {
        Block,
    },
    props: {
        repeatable: {
            type: Object,
        },
    },
    setup(props) {
        const repeatables = {
            text: RepeatableText,
        };

        return {
            repeatables,
        };
    },
});
</script>
