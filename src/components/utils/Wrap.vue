<script>
import {h} from "vue";

function renderItem(Wrapper, item) {
  // console.log('item', item.type.__name ?? item.type)
  switch (item.type) {
    case Wrapper: return item
    default:
  }
  return h(Wrapper, {}, { default: () => [item] })
}

export default function (props, ctx) {
  // console.log('wrap', props.wrapper.__name ?? props.wrapper)
  return ctx.slots.default().map((slot) => {
    if (slot.key) return slot.children?.map?.((child) => renderItem(props.wrapper, child))
    return renderItem(props.wrapper, slot)
  })
}
</script>
