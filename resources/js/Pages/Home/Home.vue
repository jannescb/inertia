<template>
    <DefaultLayout>
        <Block :block="form?.content" :repeatables="repeatables" />
    </DefaultLayout>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import DefaultLayout from '../../Layouts/Default.vue';
import Block from '../../Block.vue';
import RepeatableText from './../../components/Text.vue';
import RepeatableSection from './../../components/Section.vue';
export default defineComponent({
    components: {
        DefaultLayout,
        Block,
    },
    props: {
        form: {
            type: Object,
            required: true,
        },
    },
    setup(props) {
        const repeatables = {
            text: RepeatableText,
            section: RepeatableSection,
        };
        return {
            repeatables,
        };
    },
});
</script>
