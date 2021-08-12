<template>
    <DefaultLayout>
        <h1>Home</h1>
        s
        <!-- <LitBlock :block="form?.content" :repeatables="repeatables" /> -->
        t
    </DefaultLayout>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import DefaultLayout from '../../Layouts/Default.vue';
import { repeatables } from './home.config';
export default defineComponent({
    components: {
        DefaultLayout,
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
