<template>
  <div>
      <pre>{{ repeatable.translation.en.text }}</pre>
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
