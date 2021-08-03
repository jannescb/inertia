<template>
  <div>
      <img :src="repeatable.image[0].url" alt="">
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue'
export default defineComponent({
    name: 'Foo',
    props: {
        repeatable: {
            type: Object,
        }
    },
    setup(props){
        
    }
})
</script>
