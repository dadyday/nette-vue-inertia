<script>
import {h} from "vue";

function renderItem(Wrapper, item) {
  // console.log('item', item.type.__name ?? item.type)
  // console.log(item.props)
  switch (item.type) {
    case Wrapper: return h(item)
    default:
  }
  if (item.props) item.props.class = null;
  return h(Wrapper, { ...item.props }, { default: () => [item] })
}

export default function (props, ctx) {
  // console.log('wrap all', props.all?.__name ?? props.all)
  // console.log('wrap each', props.each?.__name ?? props.each)
  let childs = ctx.slots.default()
  if (props.each) {
    childs = childs.map((slot) => {
      if (slot.key) return slot.children?.map?.((child) => renderItem(props.each, child))
      return renderItem(props.each, slot)
    })
  }
  if (props.all) childs = renderItem(props.all, childs)
  return childs
}
</script>
