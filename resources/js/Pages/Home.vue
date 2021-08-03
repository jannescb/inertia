<template>
  <div>
      <Block :block="form.content" :config="config" />
  </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from 'vue'
import Block from './../Block.vue'
export default defineComponent({
    components: {
        Block
    },
    props: {
        form: {
            type: Object,
            required: true
        }
    },
    setup(props){
        const config = {
            text: 'Foo',
            image: 'Image',
        }
        return {
            config
        }
    }
})
</script>
