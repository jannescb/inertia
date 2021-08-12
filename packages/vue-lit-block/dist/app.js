import { defineComponent, openBlock, createElementBlock, Fragment, renderList, createBlock, resolveDynamicComponent } from 'vue';

var script = defineComponent({
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
    setup: function (props) {
        var getComponent = function (repeatable) {
            if (props.repeatables.hasOwnProperty(repeatable.type)) {
                return props.repeatables[repeatable.type];
            }
        };
        return {
            getComponent: getComponent,
        };
    },
});

function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (openBlock(true), createElementBlock(Fragment, null, renderList(_ctx.block, (repeatable, index) => {
    return (openBlock(), createBlock(resolveDynamicComponent(_ctx.getComponent(repeatable)), {
      key: index,
      repeatable: repeatable
    }, null, 8 /* PROPS */, ["repeatable"]))
  }), 128 /* KEYED_FRAGMENT */))
}

script.render = render;
script.__file = "src/LitBlock.vue";

var index = {
    install: function (app) {
        app.component('LitBlock', script);
    },
};

export { index as default };
