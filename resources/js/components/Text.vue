<template>
    <div>
        {{ repeatable.translation.en.text }}
    </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
export default defineComponent({
    name: 'Foo',
    props: {
        repeatable: {
            type: Object,
        },
    },
    setup(props) {},
});
</script>
