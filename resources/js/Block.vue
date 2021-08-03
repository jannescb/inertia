<template>
    <component
        v-for="repeatable, index in block"
        :repeatable="repeatable"
        :key="index"
        :is="getComponent(repeatable)"
    />
</template>

<script lang="ts">
import { defineComponent } from 'vue'
export default defineComponent({
    name: 'Block',
    props: {
        block: {
            type: Object,
            required: true   
        },
        config: {
            type: Object,
            required: true   
        },
    },
    setup(props){
        interface repeatable {
            type: string
        }
        const getComponent = (repeatable: repeatable)=> {
            return props.config[repeatable.type]
        }
        return {
            getComponent
        }
    }
})
</script>
