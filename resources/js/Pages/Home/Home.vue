<template>
    <DefaultLayout>
        <Block :block="form?.content" :repeatables="repeatables" />
    </DefaultLayout>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import DefaultLayout from '../../Layouts/Default.vue';
import Block from '../../components/Block.vue';
import repeatables from './home.repeatables';
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
        return {
            repeatables,
        };
    },
});
</script>
