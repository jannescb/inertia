<template>
    <DefaultLayout>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos
        magni id consequuntur suscipit? Ullam quas porro quibusdam, reiciendis
        illo autem aliquam accusantium illum? Quisquam, quidem non? Laudantium
        consequatur maiores tempora.
        <pre>{{ form }}</pre>
    </DefaultLayout>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import DefaultLayout from '../../Layouts/Default.vue';
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
            //
        };
    },
});
</script>
