<template>
    <component
        v-for="(repeatable, index) in block"
        :key="index"
        :repeatable="repeatable"
        :is="getComponent(repeatable)"
    />
</template>

<script lang="ts">
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        block: {
            type: Object,
            required: true,
        },
        repeatables: {
            type: Object,
            required: true,
        },
    },
    setup(props) {
        interface RepeatableInterface {
            type: string;
        }
        const getComponent = (repeatable: RepeatableInterface) => {
            if (props.repeatables.hasOwnProperty(repeatable.type)) {
                return props.repeatables[repeatable.type];
            }
        };
        return {
            getComponent,
        };
    },
});
</script>
